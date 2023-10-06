{{$slot}}

<div style='margin: auto;  width: 30%;  padding: 10px;'>

    <form action={{ route('site.login') }} method="post">
        @csrf

        <input name="email" value='{{ old('email') }}' type="text" placeholder="E-Mail" >
        @if($errors->has('email')) 
            <font color = 'red'>{{ $errors->first('email') }} </font>
        @endif
        <br>

        <input name="senha" value='{{ old('senha') }}' type="password" placeholder="Senha" >
        @if($errors->has('senha')) 
            <font color = 'red'>{{ $errors->first('senha') }} </font>
        @endif

        <br>
        <button type="submit" >ENVIAR</button>
    </form>




</div>