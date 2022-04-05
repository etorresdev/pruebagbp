<?php

namespace Database\Seeders;

use App\Models\Bodega;
use Illuminate\Database\Seeder;

class BodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bodega::create([
            'nombre'=>'Principal'
        ]);

        Bodega::create([
            'nombre'=>'Almacenaje'
        ]);

        Bodega::create([
            'nombre'=>'Respaldo'
        ]);
    }
}
