<?php

namespace App\Http\Controllers;
use App\Models\Pekerja;


use Illuminate\Http\Request;


class listBabyController extends Controller
{


    public function listbaby()
    {
        $Pekerja = Pekerja::where('jenis', 'Baby Sitter')->get();
        return view('daftarbaby',compact('Pekerja'));
    }
}



