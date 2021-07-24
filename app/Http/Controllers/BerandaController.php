<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda_pelanggan()
    {

    	return view('berandapelanggan');

    }

    public function beranda_pekerja()
   {
   	    return view('berandapekerja');
   }
}
