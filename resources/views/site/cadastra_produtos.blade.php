
@extends('site.layout.basico')

@section('titulo', $titulo)



@section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    

                    @component('site.layout._components.form_contato', ['classe'=>'borda-preta'])

                        <p> Vamos analisar a sua mensagem!</p>
                        <p> Tempo de 48h!</p>

                    @endcomponent



                </div>
            </div>  
        </div>

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
