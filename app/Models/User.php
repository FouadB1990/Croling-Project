<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'name_ar', 
        'nationality', 'date_of_birth', 'place_of_birth', 
        'passport_number', 'date_of_passpot_end', 'naval_passport_number',
        'date_of_passport_naval_end', 'nearest_airport', 'bank_name',
        'bank_branch', 'bank_address', 'account_number',
        'ibn_number', 'swift_code',
        'phone', 'matres_lan_certificate', 'image', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
