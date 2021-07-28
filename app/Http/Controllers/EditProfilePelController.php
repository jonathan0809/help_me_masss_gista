<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Carbon\Carbon;
use App\Models\User;

use Illuminate\Http\Request;

class EditProfilePelController extends Controller
{
    // public $pelanggan;

    public function profilpelEdit($id)
    {
        // $pelanggan = User::find($id);
        return view('profilepelEdit', compact('pelanggan'));
    }

    // public function profilepelupdate($id, Request $request)
    // {
    //     User::where('id', $id)->update([
    //         'nama' => $request->nama,
    //         'email' => $request->email,
    //         'no_hp' => $request->no_hp,
    //         'alamat' => $request->alamat,
    //     ]);
    //     \Session::flash('sukses','profil Berhasil Diubah');
    //     return redirect('profilepelEdit')->with('status', 'Data Berhasil Diubah!');
    // }
}
