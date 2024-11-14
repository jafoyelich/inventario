<?php

namespace Database\Factories;
use App\Models\Factura;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    protected $model = Factura::class;

    public function definition()
    {
        return [
            'cliente_id' => Cliente::factory(), // Relaciona la factura con un cliente creado
            'fecha' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 100, 1000),
            'subtotal' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}

