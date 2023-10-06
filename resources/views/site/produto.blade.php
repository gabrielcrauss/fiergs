


@extends('site.layout.basico')

@section('titulo', 'Produto')

@section('conteudo')


        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>{{$produto->nome}}</h1>

                <h3>
                    Valor: R$ {{ $produto->valor}}
                    <br>
                    <br>
                    Categoria: {{ $produto->categoria->nome}}
                    <br>
                    <br>
                    Descrição: {{ $produto->descricao}}
                <h3>

            </div>
            <a href="{{route('site.produtos')}}" ><h2>Voltar</h2></a>


        </div>

@endsection