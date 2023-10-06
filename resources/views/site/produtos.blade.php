
@extends('site.layout.basico')

@section('titulo', 'Produtos')



@section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Cadastro de Produto</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">

@if(session('nome_produto_apagado') != null)
    <h4> Produto {{session('nome_produto_apagado')}} apagado com sucesso! </h4>
@endif  

@php session(['nome_produto_apagado' => null])  @endphp

    @component('site.layout._components.form_produtos', ['categorias' => $categorias])                    
    @endcomponent



<center>

  

@if(isset($produtos))
<table id="tabela_dinamica" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Descrição</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Del</th>
            </tr>
        </thead>
        <tbody>

        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->valor }}</td>
                <td>{{ $produto->categoria->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td><a href=" {{ route('site.produtos')}}/{{$produto->id}}"><img height='30'px src="{{ asset('img/lupa.png')}}"></a></td>
                <td><a href=" {{ route('site.produtos')}}/{{$produto->id}}/Editar"><img height='30'px src="{{ asset('img/editar.png')}}"></a></td>

                <td>
                    <form id="form_{{$produto->id}}" method="post" action="{{ route('site.produto.delete', ['produto'=>$produto->id])}}">
                        @csrf
                        <!-- <img height='30'px src="{{ asset('img/apagar.png')}}"> -->
                        <a href='#' onclick="document.getElementById('form_{{$produto->id}}').submit()"><img height='30px' src="{{ asset('img/apagar.png')}}"></a>
                    </form>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
@endif
</center>
<br>
<br>
<br>

                </div>
            </div>  
        </div>

<script type="text/javascript">
    $(document).ready(function() {
    $('#tabela_dinamica').DataTable({"aaSorting": []});
} );
</script>

     

@endsection





