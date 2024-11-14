<?php

namespace Database\Seeders;
use App\Models\Factura;
use App\Models\Cliente;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    public function run()
    {
        $clientes = Cliente::all();

        // Asegurarse de que haya clientes antes de crear facturas
        if ($clientes->count() > 0) {
            Factura::factory()->count(10)->create([
                'cliente_id' => $clientes->random()->id,
            ]);
        } else {
            $this->command->info('No hay clientes en la base de datos. Asegúrate de correr el ClienteSeeder primero.');
        }
    }
}

