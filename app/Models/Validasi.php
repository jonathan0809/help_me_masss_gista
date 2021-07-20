<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validasi extends Model
{
    use HasFactory;

    protected $table = 'validasi';
    protected $fillable = ['pekerja_id', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'umur', 'alamat', 'jenis', 'foto', 'dokumen', 'status', 'harga', 'sd', 'smp', 'sma', 'kota', 'ket_sd', 'ket_smp', 'ket_sma', 'email', 'no_hp', 'status'];
    protected $dates = ['tanggal_lahir'];
    public $incrementing = false;

    public function pekerja()
    {
        return $this->hasOne(Pekerja::class, 'id', 'pekerja_id');
    }
}
