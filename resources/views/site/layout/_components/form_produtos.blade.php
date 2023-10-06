{{$slot}}

@if($errors->any())
<div style="background:red; position:absolute">
    {{-- $errors --}}
</div>
@endif

<div style='margin: auto;  width: 50%;  padding: 10px;'>

<form action={{ route('site.produtos') }} method="post">
    @csrf
    <input name="nome" value='{{ old('nome') }}' type="text" placeholder="Nome" class="borda-preta">
    @if($errors->has('nome')) 
        <font color = 'red'>{{ $errors->first('nome') }} </font>
    @endif
    <br>
    <input name="valor" value='{{ old('valor') }}' type="text" placeholder="R$ " class="borda-preta">
    @if($errors->has('valor')) 
        <font color = 'red'>{{ $errors->first('valor') }} </font>
    @endif
    <br>
    <select name='id_categoria' class="borda-preta}">
        <option value="">Qual a categoria</option>
        @foreach($categorias as $key => $categoria)
            <option value="{{$categoria->id}}" {{ old('id_categoria') == $categoria->id ? ' selected ' : '' }}>{{$categoria->nome}}</option>    
        @endforeach
    </select>
    @if($errors->has('id_categoria')) 
        <font color = 'red'>{{ $errors->first('id_categoria') }} </font>
    @endif
    <br>
    <textarea name="descricao" class="borda-preta">{{ old('descricao') }}</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

</div>