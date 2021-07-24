<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use App\Models\Pekerja;

class RiwayatPelController extends Controller
{
    public function index()
    {
        // return view('pesanRiwayat');

        if (auth()->user()->level == 'Pelanggan') {
            $profil = Pekerja::find('id');
            $riwayat = Pesan::where('pelanggan_id', auth()->user()->pelanggan->id)->get();
            return view('pesanRiwayat',compact('riwayat'));
        }
    }

}



