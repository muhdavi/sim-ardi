<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Yajra\DataTables\DataTables;

class DokumenController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $rels = Dokumen::all();
            return DataTables::of($rels)
                ->make();
        }

        return view('dokumen.index');
    }
}
