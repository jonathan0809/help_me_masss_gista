<?php

namespace App\Http\Controllers;
use App\Models\Pekerja;

use Illuminate\Http\Request;

class listSecurityController extends Controller
{
    public function listsecurity()
    {
        $Pekerja = Pekerja::where('jenis', 'Security')->get();
        return view('daftarSecurity',compact('Pekerja'));
    }
}
