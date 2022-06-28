<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\DokumenPegawai;
use App\Models\Lokasi;
use App\Models\Pegawai;
use App\Models\PerangkatDaerah;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class ArdiController extends Controller
{
    public function index()
    {
        $pegawai_lokasi = Lokasi::whereNotNull('pegawai_id')->pluck('pegawai_id')->toArray();;
        if (request()->ajax()) {
            $pegawais = Pegawai::with('perangkat_daerah', 'lokasi')->whereIn('id', $pegawai_lokasi)->get();
            return DataTables::of($pegawais)
                ->addIndexColumn()
                ->addColumn('perangkat_daerahs', function (Pegawai $pegawai) {
                    return $pegawai->perangkat_daerah->perangkat_daerah;
                })
                ->addColumn('lokasis', function (Pegawai $pegawai) {
                    return $pegawai->lokasi->lokasi;
                })
                ->addColumn('action', function ($pegawais) {
                    return '<a href="' . route("ardis.edit", $pegawais->id) . '"><i class="fa fa-pencil"></i></a>';
                })
                ->make();
        }

        return view('ardi.index');
    }

    public function edit(Pegawai $pegawai)
    {
        $perangkat_daerahs = PerangkatDaerah::all();
        return view('ardi.edit')->with(['pegawai' => $pegawai, 'perangkat_daerahs' => $perangkat_daerahs]);
    }

    public function create(Pegawai $pegawai)
    {

        return view('ardi.create')->with('pegawai', $pegawai);
    }

    public function store(Request $request)
    {
        try {
            $pegawai_id = $request->pegawai_id;
            $pegawai_nip = $request->pegawai_nip;
            $dokumen_kode = Dokumen::findOrFail($request->dokumen_id)->kode;
            if ($request->hasFile("file")) {
                $dokumen_pegawai = new DokumenPegawai;
                $dokumen_pegawai->dokumen_id = $request->dokumen_id;
                $dokumen_pegawai->pegawai_id = $pegawai_id;
                $dokumen_pegawai->user_id = Auth::user()->id;
                $dokumen_pegawai->nomor = $request->nomor;
                $dokumen_pegawai->tanggal = $request->tanggal;

                $file = $request->file;
                $fn_file = $dokumen_kode . "_" . $pegawai_nip . "." . strtolower($file->getClientOriginalExtension());
                $file->move(public_path('file/'.$pegawai_nip), $fn_file);
                $dokumen_pegawai->file = $fn_file;

                $dokumen_pegawai->save();

                Alert::success('Success', 'Data Berhasil Diupdate!');
                return redirect()->route('ardis.edit', $pegawai_id);
            }
        } catch (QueryException $ex){
            Alert::error('Error', 'Data Gagal Disimpan!');
            return redirect()->route('ardis.create', $pegawai_id);
        }
    }

    public function detach($dokumen_id, $pegawai_id)
    {
        try {
            $pegawai = Pegawai::find($pegawai_id);
            if(File::exists(public_path('/file/'. $pegawai->nip .'/'. $pegawai->dokumen[0]->pivot->file))){
                File::delete(public_path('/file/'. $pegawai->nip .'/'. $pegawai->dokumen[0]->pivot->file));
                $pegawai->dokumen()->detach($dokumen_id);
                Alert::success('Success', 'Data Berhasil Dihapus!');
                return redirect()->route('ardis.edit', $pegawai_id);
            }else{
                Alert::error('Error', 'File gagal Dihapus!');
                return redirect()->route('ardis.edit', $pegawai_id);
            }
        } catch (QueryException $ex) {
            Alert::error('Error', 'Data Gagal Dihapus!');
            return redirect()->route('ardis.edit', $pegawai_id);
        }
    }

    public function get_files($file_name, $pegawai_nip){
        $filepath = public_path('/file/'. $pegawai_nip .'/'. $file_name);
        return Response::download($filepath);
    }
}
