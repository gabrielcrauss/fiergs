<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SiteCategoria;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        session_start();
        
        if(isset($_SESSION['email']) && isset($_SESSION['nome']))
        {
            $categorias = SiteCategoria::all();
            //$categorias = $categorias->orderBy('nome')->get();
            //$produtos = $produtos->where('id_categoria', '>', 1);
            return view('site.categorias', ['categorias' => $categorias]);
        }
        else
            return redirect()->route('site.login');
    }

    public function salvar(Request $request)
    {

        // Validações
        $regras =[
            'nome' => 'required|min:3|max:40',
            'status' => 'required|integer|between:0,1',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome não pode ter mais de 40 caracteres',
            'status' => 'O campo status é inválido',
        ];

        $request->validate($regras,$feedback);

        $categoria = new SiteCategoria();
        $categoria->status = $request->input('status');
        $categoria->nome = $request->input('nome');
        
        //$produto->fill($request->all());

        $categoria->save();

        return redirect()->route('site.categorias');
        //SiteProduto::create($request->all());
/*
        dd($request);
        print_r($produto->getAttributes());
        exit();
        */
        
    }
}
