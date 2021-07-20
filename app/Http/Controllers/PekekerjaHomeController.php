<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PekekerjaHomeController extends Controller
{
    public function index()
    {
        return view('berandapekerja');
    }
}
