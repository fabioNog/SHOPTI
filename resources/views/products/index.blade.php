<h3>Welcome Products</h3>
<a href="{{route('products.create')}}">Insert new Products</a>

@if(count($products)>0)
<ul>
    @foreach ($products as $p)
        <li>
            {{$p['id']}} | {{$p['prod_nome']}} 
            | <a href="{{route('products.edit', $p['id'])}}">Editar</a>;
            | <a href="{{route('products.show', $p['id'])}}">Info</a>;
            | <form action="{{route('products.destroy',$p['id'])}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Deletar">
              </form>
            
        </li>
    @endforeach
</ul>

@else 

<h3>Adicione Clientes</h3>
@endif