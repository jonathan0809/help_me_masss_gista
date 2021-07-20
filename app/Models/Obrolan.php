<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obrolan extends Model
{
    use HasFactory;

    protected $table = "obrolan";
    public $fillable = ['pengirim', 'penerima', 'hash', 'pesan'];
    public $primaryKey = 'hash';
    public $incrementing = false;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'pengirim');
    }

    public function user2()
    {
        return $this->hasOne(User::class, 'id', 'penerima');
    }
}
