<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use App\Models\Rel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $raks = Rak::all();
            return DataTables::of($raks)
                ->addColumn('rel', function (Rak $rak) {
                    return $rak->lemari->rel->rel;
                })
                ->addColumn('lemari', function (Rak $rak) {
                    return $rak->lemari->lemari;
                })
                ->addColumn('action', function ($lemaris) {
                    return '<a href="#edit-'.$lemaris->id.'" class="btn btn-sm btn-primary"> Edit</a>';
                })
                ->make();
        }

        return view('rak.index');
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
     * @param  \App\Models\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function show(Rak $rak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function edit(Rak $rak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rak $rak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rak $rak)
    {
        //
    }
}
