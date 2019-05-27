
@extends('principal')

@section('conteudo-principal')
@include('menu')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  



<h2>Products</h2>
<table class="table table-dark">
        <tr>Products</tr>
    <tr>
        <th>Id</th>
        <th>Tipo</th>
        <th>Tamanho</th>
        <th>Data</th>
        <th>Opções</th>
    </tr>
    @forelse ($products as $product)
        <tr>
            <td> {{$product->id}} </td>
            <td> {{$product->tipo}} </td>
            <td> {{$product->tamanho}} </td>
            <td> {{$product->created_at}} </td>
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/products/editar/' . $product->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/products/excluir/' . $product->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Sem posts cadastrados.</td>
        </tr>
    @endforelse
</table>
<a href="{{url('/products/form-adicionar')}}" class="btn btn-primary float-right mb-2">
    Adicionar</a>

@endsection
