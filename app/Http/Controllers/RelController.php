<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Pegawai;
use App\Models\Rel;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class RelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $rels = Rel::all();
            return DataTables::of($rels)
                ->addColumn('action', function ($rels) {
                    return '<a href="' . route("rels.edit", $rels->id) . '"><i class="fa fa-pencil"></i></a>';
                })
                ->make();
        }

        return view('rel.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        try {
            Rel::create($request->all());
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
     * @param  \App\Models\Rel  $rel
     * @return \Illuminate\Http\Response
     */
    public function show(Rel $rel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rel  $rel
     */
    public function edit(Rel $rel)
    {
        return view('rel.edit', ['rel' => $rel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rel  $rel
     */
    public function update(Request $request, Rel $rel)
    {
        try {
            $rel->update($request->all());
            Alert::success('Success', 'Data Berhasil Diupdate!');
            return Redirect::to('rels');
        } catch(QueryException $ex){
            Alert::error('Error', 'Data Gagal Diupdate!');
            return view('rel.edit', ['rel' => $rel]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rel  $rel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rel $rel)
    {
        //
    }

    public function get_rels(Request $request)
    {
        $data = [];
        if($request->has('q')){
            $search = $request->q;
            $data = Rel::select('id', 'rel', 'keterangan')
                ->where('rel','LIKE',"%$search%")
                ->orWhere('keterangan','LIKE',"%$search%")
                ->get();
        } else {
            $data = Rel::limit(5)->get();
        }
        return response()->json($data);
    }

    public function dashboard()
    {
        $jumlah_pegawai = Pegawai::all();
        $pegawa_arsip = Lokasi::select(DB::raw("pegawai_id as pegawai"))
            ->whereNotNull('pegawai_id')
            ->pluck('pegawai');

        $pdpk_lk = $pegawa_arsip->count();
        $pdpk_pr = ($jumlah_pegawai->count() - $pegawa_arsip->count());
        return view('dashboard', [
            'pdpk_lk' => $pdpk_lk,
            'pdpk_pr' => $pdpk_pr,
            'jumlah_pegawai' => $jumlah_pegawai->count()
        ]);
    }
}
