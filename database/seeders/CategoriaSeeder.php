<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['descricao' => 'Eletrônicos'],
            ['descricao' => 'Roupas'],
            ['descricao' => 'Livros'],
            ['descricao' => 'Móveis'],
            ['descricao' => 'Esportes'],
            ['descricao' => 'Brinquedos'],
            ['descricao' => 'Beleza'],
            ['descricao' => 'Alimentos'],
            ['descricao' => 'Automóveis'],
            ['descricao' => 'Ferramentas'],
        ];

        DB::table('categorias')->insert($categorias);
    }
}
