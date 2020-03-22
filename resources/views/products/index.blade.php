<h3>Welcome Products</h3>
<a href="{{route('products.create')}}">Insert new Products</a>
<ol>
    @foreach ($products as $p)
        <li>
            {{$p['prod_nome']}} 
            | <a href="{{route('products.edit', $p['id'])}}">Editar</a>;
            | <a href="{{route('products.show', $p['id'])}}">Info</a>;
        </li>
    @endforeach
</ol>