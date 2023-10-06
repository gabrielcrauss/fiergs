


@extends('site.layout.basico')

@section('titulo', 'Login')

@section('conteudo')


<div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Login</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">

                    @component('site.layout._components.login')

                    @endcomponent

                    @if($erro == 1)
                        <font color = 'red'> Usuário ou senha inválidos </font>
                    @endif

                </div>
            </div>  
        </div>

@endsection