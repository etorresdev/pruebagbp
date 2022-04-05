<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre'=>'Computador',
            'descripcion' =>'Equipo de tecnología para estudio',
            'estado'=>'1'
        ]);

        Producto::create([
            'nombre'=>'Escritorio',
            'descripcion' =>'Mueble para apoyo de dispositivos tecnologicos',
            'estado'=>1
        ]);

        Producto::create([
            'nombre'=>'Impresora',
            'descripcion' =>'Dispositivo periférico permite imprimir una gama permanente de textos',
            'estado'=>1
        ]);

        Producto::create([
            'nombre'=>'Teclado',
            'descripcion' =>'Dispositivo periférico de entrada de textos',
            'estado'=>1
        ]);

        Producto::create([
            'nombre'=>'Mouse',
            'descripcion' =>'Accesorio de obsequio',
            'estado'=>1
        ]);
    }
}
