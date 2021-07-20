<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'rating';
    protected $fillable = ['user_id', 'keterangan', 'rating'];
    public $incrementing = false;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
