<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_ekitaldiak extends Model
{
    /** @use HasFactory<\Database\Factories\UsersEkitaldiakFactory> */
    use HasFactory;

    protected $table = "users_ekitaldiaks";

    protected $primaryKey= ['id_users','id_ekitaldi'];

    protected $fillable = [
        'id_users',
        'id_ekitaldi',
    ];
}
