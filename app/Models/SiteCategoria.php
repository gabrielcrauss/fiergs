<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Site_Categoria
//site_categoria
//site_categorias

class SiteCategoria extends Model
{
    use HasFactory;
    protected $table = 'site_categorias';
    protected $fillable = ['nome', 'status'];

}
