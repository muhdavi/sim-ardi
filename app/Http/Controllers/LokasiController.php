<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
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
                    return '<a href="#edit-'.$lokasis->id.'" class="btn btn-sm btn-primary"> Edit</a>';
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
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function show(Lokasi $lokasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Lokasi $lokasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lokasi $lokasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lokasi $lokasi)
    {
        //
    }
}
