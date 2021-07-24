<?php

namespace App\Http\Controllers;
use App\Models\Pekerja;

use Illuminate\Http\Request;

class profilePekerjaController extends Controller
{

    public $pelanggan;


    public function profilpek()
    {
        // , compact('profil')
        // $profil = Pelanggan::find($id);
        // return view('ProfileUserPelanggan');

        $pekerja = Pekerja::find(auth()->user()->pekerja->id);
        return view('profileUserPekerja',compact('pekerja'));
    }
}
