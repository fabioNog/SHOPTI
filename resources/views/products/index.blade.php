<h3>Welcome Products</h3>
<a href="{{route('products.create')}}">Insert new Products</a>
<ol>
    @foreach ($products as $p)
        <li>
            {{$p['prod_nome']}};
        </li>
    @endforeach
</ol>