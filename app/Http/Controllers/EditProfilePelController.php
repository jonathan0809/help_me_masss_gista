<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;

use Illuminate\Http\Request;

class EditProfilePelController extends Controller
{

    // /**
    //  * Show the update profile page.
    //  *
    //  * @param  Request $request
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function edit(Request $request)
    // {
    //     return view('profilepelEdit');
    // }
    // , compact('profil')
        // $profil = Pelanggan::find($id);
        // return view('ProfileUserPelanggan');

    

    public function profilpelEdit(Pelanggan $pelanggan)
    {



        return view('profilepelEdit');
    }
}
