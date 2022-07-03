<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Rak;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $lokasis = Lokasi::all();
            return DataTables::of($lokasis)
                ->addColumn('rel', function (Lokasi $lokasi) {
                    return $lokasi->rak->lemari->rel->rel;
                })
                ->addColumn('lemari', function (Lokasi $lokasi) {
                    return $lokasi->rak->lemari->lemari;
                })
                ->addColumn('rak', function (Lokasi $lokasi) {
                    return $lokasi->rak->rak;
                })
                ->addColumn('action', function ($lokasis) {
                    return '<a href="' . route("lokasis.edit", $lokasis->id) . '"><i class="fa fa-pencil"></i></a>';
                })
                ->make();
        }

        return view('lokasi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        try {
            $set_lokasi = 40;
            $rak_id = $request->rak_id;
            $rak = Rak::findOrFail($rak_id);
            for ($i = 1; $i <= $set_lokasi; $i++) {
                $nomor_urut = str_pad($i, 2, '0', STR_PAD_LEFT);
                $data_array[] = array(
                    'nomor_urut' => $nomor_urut,
                    'lokasi' => $rak->rak . $nomor_urut,
                    'rak_id' => $rak_id,
                    'created_at' => Carbon::now(),
                );
            }
            Lokasi::insert($data_array);
            Alert::success('Success', 'Data Berhasil Digenerate!');
            return $this->index();
        } catch (QueryException $ex) {
            Alert::error('Error', 'Data Gagal Digenerate! <br/> Karena: ' . $ex);
            return $this->create();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Lokasi $lokasi
     * @return \Illuminate\Http\Response
     */
    public function show(Lokasi $lokasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Lokasi $lokasi
     */
    public function edit(Lokasi $lokasi)
    {
        return view('lokasi.edit')->with('lokasi', $lokasi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Lokasi $lokasi
     */
    public function update(Request $request, Lokasi $lokasi)
    {
        try {
            $lokasi->pegawai_id = $request->pegawai_id;
            $lokasi->keterangan = $request->keterangan;
            $lokasi->update();
            Alert::success('Success', 'Data Berhasil Diupdate!');
            return Redirect::to('lokasis');
        } catch(QueryException $ex){
            Alert::error('Error', 'Data Gagal Disimpan!!! Karena: '. $ex->getMessage());
            return view('lokasi.edit', ['lokasi' => $lokasi]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Lokasi $lokasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lokasi $lokasi)
    {
        //
    }
}
