<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Carbon\Carbon;

use Illuminate\Http\Request;

class EditProfilePelController extends Controller
{

    public function profilpelEdit()
    {
        return view('profilepelEdit');
    }
}
