<?php

namespace App\Http\Controllers;

use App\Models\PerangkatDaerah;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PerangkatDaerahController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $rels = PerangkatDaerah::all();
            return DataTables::of($rels)
                ->make();
        }

        return view('perangkat_daerah.index');
    }
}
