<h3>Welcome Products</h3>

<ol>
    @foreach ($products as $p)
        <li>{{$p['prod_nome']}}</li>
    @endforeach
</ol>