<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function data_user()
    {

    $user = User::all();
    return view('user.data_user',['data_user' => $user]);
}

 public function form_tambah_user(){
      
        $user= User::all(); 
        return view('user.tambah_user', compact('user'));
    }

 public function create(){
        User::create([
            'nama' => request('nama'),
            'username' => request('username'),
            'level' => request('level'),
            'password' => request('password')

        ]);
        return redirect('/beranda_admin/data_user')->with('sukses','Data Berhasil Disimpan');
    }

      public function edit(User $user){
        $user = User::all();
        return view('user.edit_user', compact('user'));
    }
    public function update(User $user){
            User::where('id', $user->id)->update([
            'user' => request('user')
        ]);
         return redirect()->to('/beranda_admin/data_user');

    }
         public function delete($id){
          $user = \App\Models\User::find($id);
          $user->delete($user);
          return redirect('/beranda_admin/data_user')->with('sukses','Data Berhasil Dihapus');
    }



}
    	
