<?php

namespace App\Http\Controllers;

use App\Models\PerangkatDaerah;
use Yajra\DataTables\DataTables;

class PerangkatDaerahController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $perangkat_daerah = PerangkatDaerah::all();
            return DataTables::of($perangkat_daerah)
                ->addColumn('jumlah_pegawai', function (PerangkatDaerah $perangkat_daerah) {
                    return $perangkat_daerah->pegawais->count();
                })
                ->addColumn('action', function ($perangkat_daerah) {
                    return '<a href="#edit-'.$perangkat_daerah->id.'" class="btn btn-sm btn-primary"> Edit</a>';
                })
                ->make();
        }

        return view('perangkat_daerah.index');
    }
}
