<?php

use App\Rol; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'name' => 'Alumno',
            'credentials' => "usuario"
        ]);

        Rol::create([
            'name' => 'Profesor',
            'credentials' => "administrador"
        ]);

        Rol::create([
            'name' => 'Administrato',
            'credentials' => "administrador"
        ]);

        //factory(Category::class)->times(10)->create();
    }
}
