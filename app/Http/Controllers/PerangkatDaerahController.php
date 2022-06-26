<?php

namespace App\Http\Controllers;

use App\Models\PerangkatDaerah;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class PerangkatDaerahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $perangkat_daerah = PerangkatDaerah::all();
            return DataTables::of($perangkat_daerah)
                ->addColumn('jumlah_pegawai', function (PerangkatDaerah $perangkat_daerah) {
                    return $perangkat_daerah->pegawais->count();
                })
                ->addColumn('action', function ($perangkat_daerah) {
                    return '<a href="' . route("perangkat_daerahs.edit", $perangkat_daerah->id) . '"><i class="fa fa-pencil"></i></a>';
                })
                ->make();
        }

        return view('perangkat_daerah.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perangkat_daerah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        try {
            PerangkatDaerah::create($request->all());
            Alert::success('Success', 'Data Berhasil Disimpan!');
            return $this->index();
        } catch(QueryException $ex){
            Alert::error('Error', 'Data Gagal Disimpan!');
            return $this->create();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PerangkatDaerah  $perangkatDaerah
     * @return \Illuminate\Http\Response
     */
    public function show(PerangkatDaerah $perangkatDaerah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerangkatDaerah  $perangkatDaerah
     */
    public function edit(PerangkatDaerah $perangkatDaerah)
    {
        return view('perangkat_daerah.edit')->with('perangkat_daerah', $perangkatDaerah);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerangkatDaerah  $perangkatDaerah
     */
    public function update(Request $request, PerangkatDaerah $perangkatDaerah)
    {
        try {
            $perangkatDaerah->update($request->all());
            Alert::success('Success', 'Data Berhasil Diupdate!');
            return Redirect::to('perangkat_daerahs');
        } catch (QueryException $ex) {
            Alert::error('Error', 'Data Gagal Diupdate!');
            return view('perangkat_daerah.edit')->with('perangkat_daerah', $perangkatDaerah);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerangkatDaerah  $perangkatDaerah
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerangkatDaerah $perangkatDaerah)
    {
        //
    }

    public function get_perangkat_daerahs(Request $request)
    {
        $data = [];
        if($request->has('q')){
            $search = $request->q;
            $data = PerangkatDaerah::select('id', 'perangkat_daerah')
                ->where('perangkat_daerah','LIKE',"%$search%")
                ->get();
        }
        return response()->json($data);
    }
}
