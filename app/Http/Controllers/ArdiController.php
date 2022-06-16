<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArdiController extends Controller
{
    public function index()
    {
        return view('ardi.index');
    }
}
