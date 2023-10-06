<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SiteProduto;

class PrincipalController extends Controller
{
    public function principal()
    {
        session_start();
        //session_destroy();

        $produtos = SiteProduto::all();

        return view('site.principal', ['titulo' => 'Home'], ['produtos' => $produtos]);
    }
}
