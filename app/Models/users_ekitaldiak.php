<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_ekitaldiak extends Model
{
    /** @use HasFactory<\Database\Factories\UsersEkitaldiakFactory> */
    use HasFactory;

    protected $table = "ekitaldiak_user";

    protected $primaryKey= ['user_id','id_ekitaldi'];

    protected $fillable = [
        'user_id',
        'id_ekitaldi',
    ];
}
