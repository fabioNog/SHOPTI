<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<link rel="stylesheet" href="{{ asset('css/main.css')}}">
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                <li><a class="{{request()->routeIs('products.*') ? 'active' : ''}}" href="{{route('products.index')}}">Products</a></li>
                    <li><a class="{{request()->routeIs('clients') ? 'active' : ''}}" href="{{route('clients')}}">Clients</a></li>
                    <li><a class="{{request()->routeIs('departments') ? 'active' : ''}}" href="{{route('departments')}}">Departments</a></li>
                </ul>
            </div>            
        </div>
        <div class="col2">
            @yield('content')
        </div>
    </div>
    
</body>
</html>