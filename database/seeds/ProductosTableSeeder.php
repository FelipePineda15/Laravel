<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto;
        $producto->Nombre = ('Arros Diana');
        $producto->ValorUnitario = (1800);
        $producto->Codigo = ('4RR0ZD14N4');
        $producto->save();

        $this->command->info('Tabla de productos inicializada');
    }
}
