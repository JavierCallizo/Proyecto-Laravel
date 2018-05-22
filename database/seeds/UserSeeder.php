<?php

use App\User; 
use App\Rol; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolId = Rol::where('name','Profesor')->value('id');

        User::create([
            'name' => 'Javier',
            'surname' => 'Callizo',
            'email' => 'javi@mail.com',
            'image' => 'javi@mail.com_180515_192328.jpg',
            'password' => bcrypt('Javi123'),
            'rol_id' => $rolId
        ]);
    }
}
