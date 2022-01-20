<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $usuario = new User();
        // $usuario->login = 'admin';
        // $usuario->password = bcrypt('admin');
        // $usuario->save();

        // $usuario = new User();
        // $usuario->login = 'pablo';
        // $usuario->password = bcrypt('asdf123');
        // $usuario->save();

        $usuario = new User();
        $usuario->login = 'eladmin';
        $usuario->password = bcrypt('admin');
        $usuario->role = 'admin';
        $usuario->save();

        $usuario = new User();
        $usuario->login = 'elbasic';
        $usuario->password = bcrypt('basic');
        $usuario->role = 'basic';
        $usuario->save();

    }
}
