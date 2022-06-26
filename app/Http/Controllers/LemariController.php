<?php

namespace App\Http\Controllers;

use App\Models\Lemari;
use App\Models\Rel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
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
                    return '<a href="' . route("lemaris.edit", $lemaris->id) . '"><i class="fa fa-pencil"></i></a>';
                })
                ->make();
        }

        return view('lemari.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rels = Rel::all();
        return view('lemari.create')->with('rels', $rels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        try {
            Lemari::create($request->all());
            Alert::success('Success', 'Data Berhasil Disimpan!');
            return $this->index();
        } catch (QueryException $ex) {
            Alert::error('Error', 'Data Gagal Disimpan!');
            return $this->create();
        }
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
     */
    public function edit(Lemari $lemari)
    {
        return view('lemari.edit')->with('lemari', $lemari);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lemari  $lemari
     */
    public function update(Request $request, Lemari $lemari)
    {
        try {
            $lemari->update($request->all());
            Alert::success('Success', 'Data Berhasil Diupdate!');
            return Redirect::to('lemaris');
        } catch(QueryException $ex){
            Alert::error('Error', 'Data Gagal Diupdate!');
            return view('lemari.edit', ['lemari' => $lemari]);
        }
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

    public function get_lemaris(Request $request)
    {
        $lemaris = [];
        $rel_id = $request->rel_id;
        if ($request->has('q')) {
            $search = $request->q;
            $lemaris = Lemari::select("id", "lemari")
                ->where('rel_id', $rel_id)
                ->Where('lemari', 'LIKE', "%$search%")
                ->get();
        } else {
            $lemaris = Lemari::where('rel_id', $rel_id)->limit(10)->get();
        }
        return response()->json($lemaris);
    }
}
