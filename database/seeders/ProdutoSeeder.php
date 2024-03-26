<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lanches = [
            [
                'nome' => 'Burguer 1',
                'preco' => 17.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
            [
                'nome' => 'Burguer 2',
                'preco' => 11.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
            [
                'nome' => 'Burguer 3',
                'preco' => 12.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
            [
                'nome' => 'Burguer 4',
                'preco' => 27.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
            [
                'nome' => 'Burguer 5',
                'preco' => 22.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
            [
                'nome' => 'Burguer 6',
                'preco' => 12.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
            [
                'nome' => 'Burguer 7',
                'preco' => 13.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
            [
                'nome' => 'Burguer 8',
                'preco' => 16.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
            [
                'nome' => 'Burguer 9',
                'preco' => 15.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
            [
                'nome' => 'Burguer 10',
                'preco' => 18.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
            [
                'nome' => 'Burguer 11',
                'preco' => 20.99,
                'ingredientes' => 'hamburguer, queijo, pao,alface,tomate',
                'imagem'=> 'images/hamburgao.jpeg',
            ],
        ];

        foreach ($lanches as $lanches) {
            DB::table('produtos')->insert([
                'nome' => $lanches['nome'],
                'preco' =>$lanches['preco'],
                'ingredientes' => $lanches['ingredientes'],
                'imagem' => $lanches['imagem'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
