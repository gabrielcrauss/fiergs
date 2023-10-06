
@extends('site.layout.basico')

@section('titulo', 'Edita Produto')



@section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Edita Produto</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">


                        <div style='margin: auto;  width: 50%;  padding: 10px;'>

                        <form action={{ route('site.produtos') }} method="post">
                            @csrf
                            <input name="nome" value='{{ $produto->nome }}' type="text" placeholder="Nome" class="borda-preta">
                            @if($errors->has('nome')) 
                                <font color = 'red'>{{ $errors->first('nome') }} </font>
                            @endif
                            <br>
                            <input name="valor" value='{{ $produto->valor }}' type="text" placeholder="R$ " class="borda-preta">
                            @if($errors->has('valor')) 
                                <font color = 'red'>{{ $errors->first('valor') }} </font>
                            @endif
                            <br>
                            <select name='id_categoria' class="borda-preta}">
                                <option value="">Qual a categoria</option>
                                @foreach($categorias as $key => $categoria)
                                    <option value="{{$categoria->id}}" {{ $produto->id_categoria == $categoria->id ? ' selected ' : '' }}>{{$categoria->nome}}</option>    
                                @endforeach
                            </select>
                            @if($errors->has('id_categoria')) 
                                <font color = 'red'>{{ $errors->first('id_categoria') }} </font>
                            @endif
                            <br>
                            <textarea name="descricao" class="borda-preta">{{ $produto->descricao }}</textarea>
                            <br>
                            <button type="submit" class="borda-preta">SALVAR</button>
                        </form>

                        </div>
                        <a href="{{route('site.produtos')}}" ><h2>Voltar</h2></a>

                </div>
            </div>  
        </div>

<br>
<br>
<br>


        <div class="rodape">
            <div class="exercicio">
                <h2>Exercício</h2>
            </div>
            <div class="fiergs">
                <h2>FIERGS</h2>
            </div>
            <div class="produtos">
                <h2>Produtos</h2>
            </div>
        </div>

@endsection




