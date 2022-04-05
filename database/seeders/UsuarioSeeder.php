<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombre'=>'Mau',
            'estado'=>1
        ]);

        Usuario::create([
            'nombre'=>'Maria',
            'estado'=>1
        ]);

        Usuario::create([
            'nombre'=>'Camilo',
            'estado'=>1
        ]);
    }
}
