<?php

namespace App\Models;

use App\Models\Blog;
use App\Models\Like;
use App\Models\Post;
use App\Models\HYAcademy;
use App\Models\HyacademyNews;
use App\Models\HyacademyCourse;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Authenticatable implements MustVerifyEmail
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'provider_id',
        'avatar',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function receivedLikes()
    {
        return $this->hasManyThrough(Like::class, Post::class);
    }
    public function latestUpdate()
    {
        return $this->hasMany(latestUpdate::class);
    }
    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
    public function hyacademy()
    {
        return $this->hasOne(HYAcademy::class);
    }
     public function course()
    {
        return $this->hasMany(HyacademyCourse::class);
    }
     public function news()
    {
        return $this->hasMany(HyacademyNews::class);
    }
}
