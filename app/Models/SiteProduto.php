<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteProduto extends Model
{
    protected $fillable = ['id_categoria', 'nome', 'valor', 'descricao'];

    public function categoria()
    {
        return $this->belongsTo('\App\Models\SiteCategoria', 'id_categoria');
    }

}
