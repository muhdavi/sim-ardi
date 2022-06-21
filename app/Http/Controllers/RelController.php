<?php

namespace App\Http\Controllers;

use App\Models\Rel;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
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
        $rel = Rel::create($request->all());
        if ($rel->exists) {
            Alert::success('Success', 'Data Berhasil Disimpan!');
            return $this->index();
        } else {
            Alert::error('Error', 'Data Tidak Berhasil Disimpan!');
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
        $rel->update($request->all());
        if ($rel->exists) {
            Alert::success('Success', 'Data Berhasil Diupdate!');
            return Redirect::to('rels');
        } else {
            Alert::error('Error', 'Data Tidak Berhasil Disimpan!');
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
}
