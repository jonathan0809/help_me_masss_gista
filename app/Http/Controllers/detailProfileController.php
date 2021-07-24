<?php

namespace App\Http\Controllers;
use App\Models\Pekerja;
use App\Models\Pesan;
use Illuminate\Http\Request;


class detailProfileController extends Controller
{
    // public $pekerja;
    // public $i;
    // public $user;
    // public $i2;
    // public $pesan;
    // public $ob;
    // public $no = 0;
    // public $temp;
    // public $f;
    // public $dz = "dz-chat-user";
    // public $sd;
    // public $smp;
    // public $sma;
    // protected $listeners = ['berhasil'];


    //function pesan
    // public function pesan($id)
    // {

    //     if (Pesan::where('pelanggan_id', auth()->user()->pelanggan->id)->count() >= 3) {
    //         $this->showAlert();
    //     } else {
    //         $x = Pesan::max('id');
    //         $y = (int) substr($x, 2, 4);
    //         $y++;
    //         $z = "PS" . sprintf("%04s", $y);

    //         Pesan::create([
    //             'id' => $z,
    //             'pelanggan_id' => auth()->user()->pelanggan->id,
    //             'pekerja_id' => $id,
    //             'status' => 'Pending',
    //             'is_pelanggan' => 'Belum',
    //             'is_pekerja' => 'Belum',
    //         ]);

    //         Pekerja::where('id', $id)->update([
    //             'status' => 'Dipesan'
    //         ]);

    //         $this->showModal();
    //     }
    // }

    //Modal
    // public function showModal()
    // {
    //     $this->emit('swal:modal', [
    //         'icon'  => 'success',
    //         'title' => 'Berhasil!!!',
    //         'text'  => "Berhasil pesan pekerja",
    //     ]);
    // }

    // public function berhasil()
    // {
    //     return redirect()->to('berandaPelanggan');
    // }

    public function profileDetailPekerja($id)
    {
        $profil = Pekerja::find($id);
        return view('detailProfilePekerja',compact('profil'));
    }
}
