<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
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
                ->addColumn('action', function ($raks) {
                    return '<a href="' . route("raks.edit", $raks->id) . '"><i class="fa fa-pencil"></i></a>';
                })
                ->make();
        }

        return view('rak.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Rak::create($request->all());
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
     */
    public function edit(Rak $rak)
    {
        return view('rak.edit')->with('rak', $rak);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rak  $rak
     */
    public function update(Request $request, Rak $rak)
    {
        try {
            $rak->update($request->all());
            Alert::success('Success', 'Data Berhasil Diupdate!');
            return Redirect::to('raks');
        } catch(QueryException $ex){
            Alert::error('Error', 'Data Gagal Diupdate!');
            return view('rak.edit', ['rak' => $rak]);
        }
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

    public function get_raks(Request $request)
    {
        $raks = [];
        $lemari_id = $request->lemari_id;
        if ($request->has('q')) {
            $search = $request->q;
            $raks = Rak::select("id", "rak")
                ->where('lamri_id', $lemari_id)
                ->Where('rak', 'LIKE', "%$search%")
                ->get();
        } else {
            $raks = Rak::where('lemari_id', $lemari_id)->limit(5)->get();
        }
        return response()->json($raks);
    }
}
