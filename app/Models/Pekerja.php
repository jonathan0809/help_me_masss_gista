<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;

    protected $table = 'pekerja';
    protected $fillable = ['id', 'user_id', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'umur', 'alamat', 'jenis', 'foto', 'dokumen', 'status', 'harga', 'sd', 'smp', 'sma', 'kota', 'ket_sd', 'ket_smp', 'ket_sma', 'email', 'no_hp'];
    protected $dates = ['tanggal_lahir'];
    public $incrementing = false;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
