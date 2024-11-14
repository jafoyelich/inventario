<?php

namespace Database\Factories;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'codigo' => $this->faker->unique()->numerify('P-####'),
            'descripcion' => $this->faker->sentence(),
            'precio_compra' => $this->faker->randomFloat(2, 5, 50),
            'precio_venta' => $this->faker->randomFloat(2, 50, 100),
            'stock' => $this->faker->numberBetween(1, 100),
            'stock_minimo' => $this->faker->numberBetween(1, 10),
        ];
    }
}

