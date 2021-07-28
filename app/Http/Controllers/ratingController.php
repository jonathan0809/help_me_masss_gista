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

    public function tambah(Request $request)
    {
        // dd($this->rating);
        Rating::create([
            'user_id' => auth()->user()->id,
            'keterangan' => $request->keterangan,
            'rating' => $request->rating
        ]);

        // $this->showModal();
        \Session::flash('sukses','Data berhasil ditambah');
        return redirect('/ratingReview');
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
        $this->berhasil();
    }

    public function berhasil()
    {
        if (auth()->user()->level == 'Pelanggan') {
            return redirect()->to('/pelanggan');
        }
    }
}
