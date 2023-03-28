<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'category_id',
        'license',
        'career',
        'personalities',
        'url',
        'profile_image',
        'remember_token',
    ];

    protected $hidden = [
        'password',
        
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //  public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}