<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provals extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nomor',
        'rekening',
        'image',
        'deskripsi',
    ];
    public function users() {
        return $this->belongsTo(User::class,'user_id');
    }
}
