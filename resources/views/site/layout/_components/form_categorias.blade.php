{{$slot}}

<div style='margin: auto;  width: 30%;  padding: 10px;'>

    <form action={{ route('site.categorias') }} method="post">
        @csrf

        <input name="nome" value='{{ old('nome') }}' type="text" placeholder="Nome" >
        @if($errors->has('nome')) 
            <font color = 'red'>{{ $errors->first('nome') }} </font>
        @endif
        <br>

        <select name='status' class="borda-preta}">
            <option value="1">ATIVA</option>
            <option value="0">INATIVA</option>
        </select>
         @if($errors->has('status')) 
            <font color = 'red'>{{ $errors->first('status') }} </font>
        @endif

        <br>
        <button type="submit" >ENVIAR</button>
    </form>




</div>