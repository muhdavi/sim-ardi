<?php

namespace App\Http\Controllers;

use App\Models\Rel;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;

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
                    return '<a href="#edit-'.$rels->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                })
                ->make();
        }

        return view('rel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function edit(Rel $rel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rel  $rel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rel $rel)
    {
        //
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
