<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\SiteProduto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $produtoCategoria = new SiteProduto();
        $produtoCategoria->id_categoria = 1;
        $produtoCategoria->nome = 'Gasolina';
        $produtoCategoria->valor = 10;
        $produtoCategoria->descricao = "Combustível para carro";

        $produtoCategoria->save();
        */

        SiteProduto::create(['nome' => 'Moletom', 'valor' => 10, "id_categoria" => 1, 'descricao' => 'Roupa bem quentinha']);
        SiteProduto::create(['nome' => 'Camisa', 'valor' => 25, "id_categoria" => 1, 'descricao' => 'Camisa elegante']);
        SiteProduto::create(['nome' => 'Calça', 'valor' => 30, "id_categoria" => 1, 'descricao' => 'Calça azul escura']);

        SiteProduto::create(['nome' => 'Receiver', 'valor' => 300, "id_categoria" => 2, 'descricao' => 'Potência e qualidade']);
        SiteProduto::create(['nome' => 'Caixa de Som', 'valor' => 400, "id_categoria" => 2, 'descricao' => '120 Watts RMS']);
        SiteProduto::create(['nome' => 'DAC', 'valor' => 150, "id_categoria" => 2, 'descricao' => 'Digital Analogic Converter']);
        
        SiteProduto::create(['nome' => 'Abacaxi', 'valor' => 7, "id_categoria" => 3, 'descricao' => 'Grande e saboroso']);
        SiteProduto::create(['nome' => 'Laranja', 'valor' => 8, "id_categoria" => 3, 'descricao' => 'Muito vitamina C']);
        SiteProduto::create(['nome' => 'Mamão', 'valor' => 9, "id_categoria" => 3, 'descricao' => 'Maduro e docinho']);

        //\App\Models\SiteProduto::factory(count: 100)->create();
    }
}
