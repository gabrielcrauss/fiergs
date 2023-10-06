<div class="topo">
    <div class="logo">
        <img src="{{ asset('img/logo.png')}}"  height='40px'>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('site.index') }}">Home</a></li>
            <li><a href="{{ route('site.produtos') }}">Produtos</a></li>
            <li><a href="{{ route('site.categorias') }}">Categorias</a></li>
            <li><a href="{{ route('site.logout') }}">Logout</a></li>
        </ul>
    </div>
</div>