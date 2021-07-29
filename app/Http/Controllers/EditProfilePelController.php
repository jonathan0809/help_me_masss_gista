<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;

use App\Models\User;

use Illuminate\Http\Request;

class EditProfilePelController extends Controller
{



    public function profilpelEdit()
    {
        $data = User::where('id','=',Auth()->user()->id)->first();
        //dd($data);
        return view('profilepelEdit',compact('data'));
    }


}
