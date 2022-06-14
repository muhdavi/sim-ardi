<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PegawaiController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $rels = Pegawai::all();
            return DataTables::of($rels)
                ->make();
        }

        return view('pegawai.index');
    }
}
