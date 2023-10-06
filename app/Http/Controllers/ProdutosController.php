<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SiteProduto;
use \App\Models\SiteCategoria;

class ProdutosController extends Controller
{
    public function index(Request $request)
    {
        session_start();
        
        if(isset($_SESSION['email']) && isset($_SESSION['nome']))
        {
            $categorias = SiteCategoria::all();
            $produtos = new SiteProduto();
            $produtos = $produtos->orderBy('nome')->get();
            return view('site.produtos', ['categorias' => $categorias], ['produtos' => $produtos]);
        }
        else
            return redirect()->route('site.login');
    }

    public function salvar(Request $request)
    {

        // Validações

        $regras =[
            'nome' => 'required|min:3|max:40',
            'valor' => 'required|numeric',
            'id_categoria' => 'required',
            'descricao' => 'max:1000',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',

            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome não pode ter mais de 40 caracteres',
            'valor.numeric' => 'O campo valor tem que ser um número',
            'id_categoria.required' => 'O campo categoria é obrigatório',
            'descricao.max' => 'O campo descricao não pode ter mais de 1000 caracteres'
        ];

        $request->validate($regras,$feedback);

        

        $produto = new SiteProduto();
        $produto->id_categoria = $request->input('id_categoria');
        $produto->nome = $request->input('nome');
        $produto->valor = $request->input('valor');
        $produto->descricao = $request->input('descricao');
        
        $produto->save();

        return redirect()->route('site.produtos');
        
    }

    public function show(SiteProduto $produto)
    {
        return view('site.produto', ['produto' => $produto]);
    }

    public function editar(SiteProduto $produto)
    {
        $categorias = SiteCategoria::all();
        return view('site.produto_edita', ['produto' => $produto], ['categorias' => $categorias]);
    }

    public function update(SiteProduto $produto)
    {
        echo "Chegamos aqui";
    }
    public function delete(SiteProduto $produto)
    {
        //session_start();
        session(['nome_produto_apagado' => $produto->nome]);
        //$_SESSION['nome_produto_apagado'] = $produto->nome;
        $produto->delete();
        return redirect()->route('site.produtos');
    }
}
