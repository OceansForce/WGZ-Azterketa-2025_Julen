<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\users;

class ekitaldiak extends Model
{
    /** @use HasFactory<\Database\Factories\EkitaldiakFactory> */
    use HasFactory;
    
    public $timestamps = false;

    protected $table='ekitaldiaks';
    protected $primaryKey='id';

    protected $fillable=[
        'id',
        'izena',
        'date',
        'azalpena',
    ];

    // Relación muchos a muchos con Module
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(users::class,'users_ekitaldiaks', 'id_ekitaldi', 'id_users');
    }
}
