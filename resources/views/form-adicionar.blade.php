@extends('principal')

@section('conteudo-principal')

 <body>
     <style>
         div.a{
             text-align: center;
         }
     </style> 
<div class="a">
        <br />  <br />  <br />  <br /> 
<h2>Adicionar Produto</h2>

<form method="post" action="{{url('/products/adicionar')}}">

    @csrf
    
    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input id="tipo" class="form-control" name="tipo" type="text">
    </div>

    <div class="form-group">
        <label for="tamanho">Tamanho</label>
        <input id="tamanho" class="form-control" name="tamanho" type="text" value="{{ old('tamanho') }}">
        

    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>
</div>
 </body>
@endsection
