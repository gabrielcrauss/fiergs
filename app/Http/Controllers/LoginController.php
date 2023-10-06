<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        session_start(); 
        session_destroy(); 
        //if($erro == '1')
        $erro = $request->get('erro');
        return view('site.login', ['erro' => $erro]);
    }

    public function login(Request $request)
    {
        $regras =[
            'email' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'email.email' => 'O campo E-MAIL é inválido',
            'senha.required' => 'O campo SENHA é obrigatório',
        ];

        $request->validate($regras,$feedback);

        $email = $request->get('email');
        $senha = $request->get('senha');

        $user = new User();

        $usuario = $user->where('email', '=', $email)->where('password', '=', $senha)->get();
        $usuario = $usuario->first();

        //print_r($usuario);

        if(isset($usuario->name))
        {
            session_start();
            session_destroy();
            session_start();
            $_SESSION['nome'] = $usuario->name; 
            $_SESSION['email'] = $usuario->email; 

            return redirect()->route('site.produtos');
        }
        else 
            return redirect()->route('site.login', ['erro' => 1]);
    }
}
