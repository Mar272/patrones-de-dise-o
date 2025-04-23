<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email'];

    protected static function booted()
    {
        static::created(function ($user) {
            // Lógica a ejecutar cuando un usuario es creado
            \Log::info("Nuevo usuario creado: " . $user->name);
        });
    }
}
