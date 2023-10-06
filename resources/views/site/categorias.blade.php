
@extends('site.layout.basico')

@section('titulo', 'Produtos')



@section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Cadastro de Categoria</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">

                    @component('site.layout._components.form_categorias', ['categorias' => $categorias])
                    @endcomponent




@if(isset($categorias))
<table id="tabela_dinamica" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Status</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>

            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>
                    <td>{{ $categoria->status == 1 ? 'ATIVA' : 'INATIVA' }}</td>
                    <td><a href=" {{ route('site.produtos')}}/{{$categoria->id}}"><img height='30'px src="{{ asset('img/lupa.png')}}"></a></td>
                <td><a href=" {{ route('site.produtos')}}/{{$categoria->id}}/Editar"><img height='30'px src="{{ asset('img/editar.png')}}"></a></td>
                </tr>
            @endforeach
        
        </tbody>
    </table>
@endif


                </div>
            </div>  
        </div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#tabela_dinamica').DataTable({"aaSorting": []});
} );
</script>

@endsection




