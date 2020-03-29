<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<style>
    .row {
        display: flex;
    }

    .col1 {
        flex: 30%;
        padding: 10px;
    }

    .col2 {
        flex: 70%;
        padding: 10px;
    }

    .menu ul
    {
        margin: 0px;
        padding: 0px;
        list-style-type: none;
    }

    .menu li
    {
        list-style: none;
    }

    .menu a
    {
        display: block;
        width: 200px;
        height: 20px;
        color: black;
        background-color: #FFFFFF;
        text-decoration: none;
        text-align: center;
        margin: 5px;
        font-size: 18px;
    }

    .menu a:hover
    {
        background-color: #b9bcd0;
        color: #0000ff;
        font-weight: bold;
    }

    .menu .active
    {
        background-color: #c0d4f3;
    }
</style>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li><a href="{{route('products.index')}}">Products</a></li>
                    <li><a href="">Clients</a></li>
                    <li><a href="">Departments</a></li>
                </ul>
            </div>            
        </div>
        <div class="col2">
            @yield('content')
        </div>
    </div>
    
</body>
</html>