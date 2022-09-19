<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('curso')->insert([
                'titulo' => 'Redes de Computadores',
                'preco' => '300.00',
                'descricao' => 'Introdução à redes de computadores',
                'imagem' => ''
            ]);

            DB::table('curso')->insert([
                'titulo' => 'Administração de Sistemas Operacionais',
                'preco' => '180.50',
                'descricao' => 'Curso avançado de Sistemas Operacionais',
                'imagem' => ''
            ]);

            DB::table('curso')->insert([
                'titulo' => 'JavaScript Avançado',
                'preco' => '90.00',
                'descricao' => 'Estrutura de dados com JavaScript',
                'imagem' => ''
            ]);
    }
}
