<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    protected $fillable = ['id', 'user_id', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'alamat', 'foto', 'dokumen', 'email', 'no_hp'];
    protected $dates = ['tanggal_lahir'];
    public $incrementing = false;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
