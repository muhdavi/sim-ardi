<?php

namespace App\Http\Controllers;

use App\Models\Lemari;
use App\Models\Rel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LemariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        if (request()->ajax()) {
            $lemaris = Lemari::all();
            return DataTables::of($lemaris)
                ->addColumn('rel', function (Lemari $lemari) {
                    return $lemari->rel->rel;
                })
                ->addColumn('action', function ($lemaris) {
                    return '<a href="#edit-'.$lemaris->id.'" class="btn btn-sm btn-primary"> Edit</a>';
                })
                ->make();
        }

        return view('lemari.index');
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
     * @param  \App\Models\Lemari  $lemari
     * @return \Illuminate\Http\Response
     */
    public function show(Lemari $lemari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lemari  $lemari
     * @return \Illuminate\Http\Response
     */
    public function edit(Lemari $lemari)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lemari  $lemari
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lemari $lemari)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lemari  $lemari
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lemari $lemari)
    {
        //
    }
}
