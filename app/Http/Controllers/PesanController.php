<?php

namespace App\Http\Controllers;
use App\Models\Pekerja;
use App\Models\Pesan;
use App\Models\User;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    

    public function pesan($id)
    {

        if ($pekerja=Pesan::where('pelanggan_id', auth()->user()->pelanggan->id)->count() >= 3) {
            $this->showAlert();
        } else {
            $x = Pesan::max('id');
            $y = (int) substr($x, 2, 4);
            $y++;
            $z = "PS" . sprintf("%04s", $y);

            Pesan::create([
                'id' => $z,
                'pelanggan_id' => auth()->user()->pelanggan->id,
                'pekerja_id' => $id,
                'status' => 'Pending',
                'is_pelanggan' => 'Belum',
                'is_pekerja' => 'Belum',
            ]);

            Pekerja::where('id', $id)->update([
                'status' => 'Dipesan'
            ]);

            $this->showModal();
        }
    }

    public function showModal()
    {
        $this->emit('swal:modal', [
            'icon'  => 'success',
            'title' => 'Berhasil!!!',
            'text'  => "Berhasil pesan pekerja",
        ]);
    }

}
