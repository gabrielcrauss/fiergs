<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Produtos / @yield('titulo')</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css')}}">
        
        <!-- DATA TABLE -->
        <script src="{{ asset('datatables/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
        <link href=" {{ asset('datatables/responsive.dataTables.min.css')}}" rel="stylesheet">
        <link href=" {{ asset('datatables/jquery.dataTables.min.css')}}" rel="stylesheet">
        <script src="{{ asset('datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('datatables/dataTables.responsive.min.js')}}"></script>

        
    </head>

<?php if(!isset($_SESSION)) session_start(); ?>

    <body>
        @if(isset($_SESSION['email']) && isset($_SESSION['nome']))
            @include('site.layout._partials.topo_logado')
        @else
            @include('site.layout._partials.topo')
        @endif

        @yield('conteudo')

        

    </body>
</html>