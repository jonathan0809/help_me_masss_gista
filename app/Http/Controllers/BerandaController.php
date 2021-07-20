<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda_pelanggan()
    {

    	return view('beranda.berandapelanggaan');

    }

    public function beranda_pekerja()
   {
   	return view('beranda.berandapekerja');
   }
}
