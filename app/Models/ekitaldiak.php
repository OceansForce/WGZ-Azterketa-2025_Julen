<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function erabiltzaileak(): BelongsToMany
    {
        return $this->belongsToMany(erabiltzaileak::class,'users_ekitaldiak', 'id_ekitaldi', 'id_users');
    }
}
