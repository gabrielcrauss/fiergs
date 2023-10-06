<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\SiteCategoria;

class PopulaCategoriaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteCategoria::create(['nome' => 'Roupa']);
        SiteCategoria::create(['nome' => 'Eletrônico']);
        SiteCategoria::create(['nome' => 'Alimentação']);
    }
}
