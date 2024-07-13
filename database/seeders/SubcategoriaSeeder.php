<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategorias = [
            ['descricao' => 'Smartphones', 'id_categoria' => 1],
            ['descricao' => 'Notebooks', 'id_categoria' => 1],
            ['descricao' => 'Televisores', 'id_categoria' => 1],
            ['descricao' => 'Camisetas', 'id_categoria' => 2],
            ['descricao' => 'Calças', 'id_categoria' => 2],
            ['descricao' => 'Vestidos', 'id_categoria' => 2],
            ['descricao' => 'Ficção', 'id_categoria' => 3],
            ['descricao' => 'Biografias', 'id_categoria' => 3],
            ['descricao' => 'Didáticos', 'id_categoria' => 3],
            ['descricao' => 'Sofás', 'id_categoria' => 4],
            ['descricao' => 'Mesas', 'id_categoria' => 4],
            ['descricao' => 'Cadeiras', 'id_categoria' => 4],
            ['descricao' => 'Futebol', 'id_categoria' => 5],
            ['descricao' => 'Basquete', 'id_categoria' => 5],
            ['descricao' => 'Natação', 'id_categoria' => 5],
            ['descricao' => 'Bonecas', 'id_categoria' => 6],
            ['descricao' => 'Carrinhos', 'id_categoria' => 6],
            ['descricao' => 'Jogos de Tabuleiro', 'id_categoria' => 6],
            ['descricao' => 'Maquiagem', 'id_categoria' => 7],
            ['descricao' => 'Perfumes', 'id_categoria' => 7],
            ['descricao' => 'Cremes', 'id_categoria' => 7],
            ['descricao' => 'Frutas', 'id_categoria' => 8],
            ['descricao' => 'Legumes', 'id_categoria' => 8],
            ['descricao' => 'Carnes', 'id_categoria' => 8],
            ['descricao' => 'Carros', 'id_categoria' => 9],
            ['descricao' => 'Motos', 'id_categoria' => 9],
            ['descricao' => 'Peças', 'id_categoria' => 9],
            ['descricao' => 'Martelos', 'id_categoria' => 10],
            ['descricao' => 'Chaves de Fenda', 'id_categoria' => 10],
            ['descricao' => 'Parafusadeiras', 'id_categoria' => 10],
            ['descricao' => 'Tablets', 'id_categoria' => 1],
            ['descricao' => 'Monitores', 'id_categoria' => 1],
            ['descricao' => 'Impressoras', 'id_categoria' => 1],
            ['descricao' => 'Sapatos', 'id_categoria' => 2],
            ['descricao' => 'Acessórios', 'id_categoria' => 2],
            ['descricao' => 'Blusas', 'id_categoria' => 2],
            ['descricao' => 'Romance', 'id_categoria' => 3],
            ['descricao' => 'Terror', 'id_categoria' => 3],
            ['descricao' => 'Ciência', 'id_categoria' => 3],
            ['descricao' => 'Armários', 'id_categoria' => 4],
            ['descricao' => 'Camas', 'id_categoria' => 4],
            ['descricao' => 'Estantes', 'id_categoria' => 4],
            ['descricao' => 'Tênis', 'id_categoria' => 5],
            ['descricao' => 'Academia', 'id_categoria' => 5],
            ['descricao' => 'Ciclismo', 'id_categoria' => 5],
            ['descricao' => 'Jogos Eletrônicos', 'id_categoria' => 6],
            ['descricao' => 'Quebra-cabeças', 'id_categoria' => 6],
            ['descricao' => 'Brinquedos Educativos', 'id_categoria' => 6],
            ['descricao' => 'Shampoos', 'id_categoria' => 7],
            ['descricao' => 'Condicionadores', 'id_categoria' => 7],
            ['descricao' => 'Hidratantes', 'id_categoria' => 7],
        ];

        DB::table('subcategorias')->insert($subcategorias);
    }
}
