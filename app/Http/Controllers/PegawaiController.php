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
            $pegawais = Pegawai::all();
            return DataTables::of($pegawais)
                ->addColumn('perangkat_daerah', function (Pegawai $pegawai) {
                    return $pegawai->perangkat_daerah->perangkat_daerah;
                })
                ->addColumn('action', function ($pegawais) {
                    return '<a href="#edit-'.$pegawais->id.'" class="btn btn-sm btn-primary"> Edit</a>';
                })
                ->make();
        }

        return view('pegawai.index');
    }
}
