<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\SiteCategoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $categoria = new SiteCategoria();
        $categoria->nome = 'Combustível';
        $categoria->status = '0';
        $categoria->save();
        */
        //DB::table('site_categorias')->insert(['nome'=>'Comida', 'status' => 1]);

        //\App\Models\SiteCategoria::factory->count(100)->create();
        \App\Models\SiteCategoria::factory(count: 100)->create();

    }
}
