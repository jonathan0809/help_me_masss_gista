<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan';
    protected $fillable = ['id', 'pelanggan_id', 'pekerja_id', 'mulai', 'selesai', 'status', 'is_pelanggan', 'is_pekerja'];
    protected $dates = ['mulai', 'selesai'];
    public $incrementing = false;

    public function pekerja()
    {
        return $this->hasOne(Pekerja::class, 'id', 'pekerja_id');
    }

    public function pelanggan()
    {
        return $this->hasOne(Pelanggan::class, 'id', 'pelanggan_id');
    }
}
