<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'user_id',
        'service_id',
        'fecha',
        'hora',
        'estado', // opcional: por ejemplo "pendiente", "confirmado", etc.
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function servicio()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}

