@extends('principal')

@section('conteudo-principal')
<br />  <br />  <br />  
<h2>Editar Produto</h2>
<hr />
 
<form method="post" action="{{url('/products/editar')}}">

    @csrf
    <input type="hidden" name="id" value="{{$product->id}}">

    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input id="tipo" class="form-control" name="tipo" type="text"
        value="{{$product->tipo}}">
    </div>

    <div class="form-group">
        <label for="tamanho">Tamanho</label>
        <input id="tamanho" class="form-control" rows="3"
        name="tamanho" value="{{$product->tamanho}}">
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>


