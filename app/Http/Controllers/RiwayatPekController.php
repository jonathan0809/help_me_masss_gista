<?php

namespace App\Http\Controllers;
use App\Models\Pesan;
use Illuminate\Http\Request;

class RiwayatPekController extends Controller
{
    public function index()
    {
        if (auth()->user()->level == 'Pekerja') {
            $riwayat = Pesan::where('pekerja_id', auth()->user()->pekerja->id)->get();
            return view('pesanRiwayat', compact('riwayat'));
        }
    }
}
