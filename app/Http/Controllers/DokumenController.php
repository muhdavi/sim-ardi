<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $dokumens = Dokumen::all();
            return DataTables::of($dokumens)
                ->addColumn('action', function ($dokumens) {
                    return '<a href="' . route("dokumens.edit", $dokumens->id) . '"><i class="fa fa-pencil"></i></a>';
                })
                ->make();
        }

        return view('dokumen.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        try {
            Dokumen::create($request->all());
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
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function show(Dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokumen  $dokumen
     */
    public function edit(Dokumen $dokumen)
    {
        return view('dokumen.edit')->with('dokumen', $dokumen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokumen  $dokumen
     */
    public function update(Request $request, Dokumen $dokumen)
    {
        try {
            $dokumen->update($request->all());
            Alert::success('Success', 'Data Berhasil Diupdate!');
            return Redirect::to('dokumens');
        } catch(QueryException $ex){
            Alert::error('Error', 'Data Gagal Diupdate!');
            return view('rel.edit', ['dokumen' => $dokumen]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokumen $dokumen)
    {
        //
    }

    public function get_dokumens(Request $request)
    {
        $dokumens = [];
        if ($request->has('q')) {
            $search = $request->q;
            $dokumens = Dokumen::select("id", "nama", "kode")
                ->where('nama', 'LIKE', "%$search%")
                ->orWhere('kode', 'LIKE', "%$search%")
                ->orderBy('nama')
                ->get();
        } else {
            $dokumens = Dokumen::limit(5)->orderBy('nama')->get();
        }
        return response()->json($dokumens);
    }
}
