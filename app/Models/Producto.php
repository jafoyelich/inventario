<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'codigo',
        'descripcion',
        'precio_compra',
        'precio_venta',
        'stock',
        'stock_minimo',
    ];

    // Relaciones (si las hay) y otras configuraciones adicionales
}
