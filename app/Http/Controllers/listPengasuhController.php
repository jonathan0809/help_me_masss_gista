<?php

namespace App\Http\Controllers;
use App\Models\Pekerja;


use Illuminate\Http\Request;


class listPengasuhController extends Controller
{


    public function listpengasuh()
    {
        $Pekerja = Pekerja::where('jenis', 'Pengasuh Orang Tua')->get();
        return view('daftarPengasuh',compact('Pekerja'));
    }
}



