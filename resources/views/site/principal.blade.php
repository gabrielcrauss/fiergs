@extends('site.layout.basico')

@section('titulo', $titulo)

@section('conteudo')

        <div class="conteudo-destaque">
        
            <div class="direita">
                <div class="informacoes">
                    <h1>Exercício FIERGS</h1>
                    <div class="chamada">
                        <img src="/img/check.png">
                        <span class="texto-branco">PHP 8.1</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Laravel 10</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Rotas / FallBack</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Validações de formulários</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">MVC</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Migrations</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Seeders</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Blade</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Autenticação</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">MariaDB</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Eloquent ORM</span>
                    </div>
                </div>
            </div>

            <div class="esquerda">
            
                <div class="contato">
                    <div style="background: #2a9ee2;  text-align: center;">
                        <h1>Produtos Cadastrados</h1>
                    </div>





                    <div style="background: #cde7f7;  text-align: center;">
                        @if(isset($produtos))
                        <table id="tabela_dinamica" class="display responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Valor</th>
                                        <th>Categoria</th>
                                        <th>Descrição</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($produtos as $produto)
                                    <tr>
                                        <td>{{ $produto->nome }}</td>
                                        <td>{{ $produto->valor }}</td>
                                        <td>{{ $produto->categoria->nome }}</td>
                                        <td>{{ $produto->descricao }}</td>
                                    </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                        @endif
                    </div>

                </div>
            </div>
        </div>



        
<script type="text/javascript">
    $(document).ready(function() {
    $('#tabela_dinamica').DataTable({"aaSorting": []});
} );
</script>

@endsection


