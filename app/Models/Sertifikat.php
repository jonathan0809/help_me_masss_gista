<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;

    protected $table = 'sertifikat';
    protected $fillable = ['pekerja_id', 'keterangan', 'sertifikat', 'hash', 'status'];
    public $primaryKey = 'hash';
    public $incrementing = false;

    public function pekerja()
    {
        return $this->hasOne(Pekerja::class, 'id', 'pekerja_id');
    }
}
