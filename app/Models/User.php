<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    public $timestamps = false;

    protected $table='users';
    protected $primaryKey='id';

    protected $fillable=[
        'id',
        'name',
        'abizena',
        'email',
        'dni',
        'jaiotze_data',
        'rola',
    ];

    // Relación muchos a muchos con Module
    public function erabiltzaileak(): BelongsToMany
    {
        return $this->belongsToMany(erabiltzaileak::class,'users_ekitaldiak', 'id_ekitaldi', 'id_users');
    }
}