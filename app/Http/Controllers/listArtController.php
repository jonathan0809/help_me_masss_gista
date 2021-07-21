<?php

namespace App\Http\Controllers;
use App\Models\Pekerja;
use Illuminate\Http\Request;


class listArtController extends Controller
{
    public function listart()
    {
        $Pekerja = Pekerja::where('jenis', 'Asisten Rumah Tangga')->get();
        return view('daftarAsisten',compact('Pekerja'));
    }
}



