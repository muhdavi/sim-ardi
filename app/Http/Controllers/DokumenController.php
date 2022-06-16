<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Yajra\DataTables\DataTables;

class DokumenController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $dokumens = Dokumen::all();
            return DataTables::of($dokumens)
                ->addColumn('action', function ($dokumens) {
                    return '<a href="#edit-'.$dokumens->id.'" class="btn btn-sm btn-primary"> Edit</a>';
                })
                ->make();
        }

        return view('dokumen.index');
    }
}
