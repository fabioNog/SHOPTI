@extends('layouts.main')

@section('content')

<h3>Editando o produto</h3>

<form action="{{route('products.update',$product['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="prod_nome" value={{$product['prod_nome']}}>
    <input type="submit" value="Editar">
</form>

@endsection
