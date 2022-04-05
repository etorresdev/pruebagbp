<?php

namespace Database\Seeders;

use App\Models\Inventario;
use Illuminate\Database\Seeder;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventario::create([
            'id_bodega'=>1,
            'id_producto'=>1,
            'cantidad'=> 5
        ]);

        Inventario::create([
            'id_bodega'=>2,
            'id_producto'=>2,
            'cantidad'=> 15
        ]);

        Inventario::create([
            'id_bodega'=>3,
            'id_producto'=>3,
            'cantidad'=> 9
        ]);

        Inventario::create([
            'id_bodega'=>2,
            'id_producto'=>1,
            'cantidad'=> 3
        ]);

        Inventario::create([
            'id_bodega'=>3,
            'id_producto'=>2,
            'cantidad'=> 7
        ]);

        Inventario::create([
            'id_bodega'=>1,
            'id_producto'=>3,
            'cantidad'=> 3
        ]);

        Inventario::create([
            'id_bodega'=>3,
            'id_producto'=>5,
            'cantidad'=> 3
        ]);

        Inventario::create([
            'id_bodega'=>2,
            'id_producto'=>4,
            'cantidad'=> 50
        ]);
    }
}
