<?php

namespace App\Http\Controllers;
use App\Models\Rating;

use Livewire\Component;

use Illuminate\Http\Request;

class ratingController extends Controller
{
    public $rating;
    public $keterangan;
    protected $listeners = ['berhasil', 'getLatitudeForInput'];

    public function ratingUlasan()
    {
        // $users = User::all();
        // $articles = tambah::all();
        return view('ratingulasan');
    }

    public function tambah()
    {
        // dd($this->rating);
        Rating::create([
            'user_id' => auth()->user()->id,
            'keterangan' => $this->keterangan,
            'rating' => $this->rating
        ]);

        $this->showModal();
    }

    public function getLatitudeForInput($value)
    {
        if (!is_null($value))
            $this->rating = $value;
    }

    public function showModal()
    {
        $this->emit('swal:modal', [
            'icon'  => 'success',
            'title' => 'Berhasil!!!',
            'text'  => "Berhasil memberi rating",
        ]);
    }

    public function berhasil()
    {
        if (auth()->user()->level == 'Pelanggan') {
            return redirect()->to('/pelanggan');
        }
    }


}
