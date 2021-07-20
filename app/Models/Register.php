<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = 'register';
    protected $fillable = ['id', 'username', 'password', 'tanggal_lahir', 'jenis', 'level', 'foto', 'dokumen'];
    protected $dates = ['tanggal_lahir'];
    public $incrementing = false;
}
