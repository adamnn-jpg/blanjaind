<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'alamat',
        'telepon',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the reviews written by the user.
     */
    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'user_id');
    }

    /**
     * Get the cart items for the user.
     */
    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'user_id');
    }
}
