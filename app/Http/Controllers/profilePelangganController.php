<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;

use Illuminate\Http\Request;

class profilePelangganController extends Controller
{

    public $pelanggan;


    public function profilpel()
    {
        // , compact('profil')
        // $profil = Pelanggan::find($id);
        // return view('ProfileUserPelanggan');

        $pelanggan = Pelanggan::find(auth()->user()->pelanggan->id);
        return view('ProfileUserPelanggan',compact('pelanggan'));
    }
}
