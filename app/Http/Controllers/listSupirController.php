<?php

namespace App\Http\Controllers;
use App\Models\Pekerja;


use Illuminate\Http\Request;


class listSupirController extends Controller
{


    public function listSupir()
    {
        $Pekerja = Pekerja::where('jenis', 'Sopir')->get();
        return view('daftarSupir',compact('Pekerja'));
    }
}



