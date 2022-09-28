<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kauan Machado',
            'email' => 'kauanmachado@ifsul.edu.br',
            'password' => bcrypt('12345'),
            ]);
        
        DB::table('users')->insert([
            'name' => 'Pedro Augusto',
            'email' => 'pedro@hotmail.com',
            'password' => bcrypt('124'),
            ]);

        DB::table('users')->insert([
            'name' => 'Maria Silva',
            'email' => 'mariasilva22@gmail.com',
            'password' => bcrypt('1112'),
            ]);
    }
}
