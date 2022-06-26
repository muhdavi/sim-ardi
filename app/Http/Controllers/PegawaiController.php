<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\PerangkatDaerah;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $pegawais = Pegawai::with('perangkat_daerah');
            return DataTables::of($pegawais)
                ->addColumn('perangkat_daerahs', function (Pegawai $pegawai) {
                    return $pegawai->perangkat_daerah->perangkat_daerah;
                })
                ->addColumn('action', function ($pegawais) {
                    return '<a href="' . route("pegawais.edit", $pegawais->id) . '"><i class="fa fa-pencil"></i></a>';
                })
                ->make();
        }

        return view('pegawai.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        try {
            Pegawai::create($request->all());
            Alert::success('Success', 'Data Berhasil Disimpan!');
            return $this->index();
        } catch(QueryException $ex){
            Alert::error('Error', 'Data Gagal Disimpan! <br/> Karena: '. $ex);
            return $this->create();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     */
    public function edit(Pegawai $pegawai)
    {
        $perangkat_daerahs = PerangkatDaerah::all();
        return view('pegawai.edit')->with(['pegawai' => $pegawai, 'perangkat_daerahs' => $perangkat_daerahs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        try {
            $pegawai->update($request->all());
            Alert::success('Success', 'Data Berhasil Diupdate!');
            return Redirect::to('pegawais');
        } catch(QueryException $ex){
            Alert::error('Error', 'Data Gagal Diupdate!');
            return view('rel.edit', ['rel' => $pegawai]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }

    public function get_pegawais(Request $request)
    {
        $data = [];
        if($request->has('q')){
            $search = $request->q;
            $data = Pegawai::select('id', 'nip', 'nama')
                ->where('nip','LIKE',"%$search%")
                ->orWhere('nama','LIKE',"%$search%")
                ->get();
        }
        return response()->json($data);
    }
}
