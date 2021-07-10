<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HyacademyNews extends Model
{
    use HasFactory;
    protected $fillable = [
        'news',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
