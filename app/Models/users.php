<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;//Token ruta
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\ekitaldiak;


class users extends Model
{
    /** @use HasFactory<\Database\Factories\UsersFactory> */
    use HasFactory;
   
    use HasApiTokens;// Token

    public $timestamps = false;

    protected $table='users';
    protected $primaryKey='id';

    protected $fillable=[
        'id',
        'name',
        'abizena',
        'password',
        'email',
        'dni',
        'jaiotze_data',
        'rola',
    ];

    
    public function ekitaldiak(): BelongsToMany
    {
        return $this->belongsToMany(ekitaldiak::class,'ekitaldiak_user', 'user_id', 'id_ekitaldi');
    }
}
