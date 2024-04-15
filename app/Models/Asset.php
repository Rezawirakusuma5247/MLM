<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'number',
        'Rank',
        'choice',
        'code',
    ];
    public function users() {
        return $this->belongsTo(User::class,'user_id');
    }
}
