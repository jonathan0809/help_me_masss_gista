<?php

namespace App\Http\Controllers;
use App\Models\Pekerja;
use Illuminate\Http\Request;


class detailProfileController extends Controller
{
    public function profileDetailPekerja($id)
    {
        $profil = Pekerja::find($id);
        return view('detailProfilePekerja',compact('profil'));
    }
}
