<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PekerjaHomeController extends Controller
{
    public function index()
    {
        return view('berandapekerja');
    }
}
