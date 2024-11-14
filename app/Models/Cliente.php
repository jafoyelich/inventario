<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
    ];

    /**
     * Relación con Facturas
     */
    public function facturas()
    {
        return $this->hasMany(Factura::class);
    }

    // Configuraciones y métodos adicionales
}
