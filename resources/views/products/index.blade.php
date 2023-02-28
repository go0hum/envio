<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi envio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Productos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col clearfix">
            <a href="/products/add" class="btn btn-primary mb-3 pull-right">Agregar Producto</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form>
                <h2>Search</h2>
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="Name of product" class="form-control mb-3" value="{{$nombre}}"/>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Min" name="min"value="{{$min}}">
                        <span class="input-group-text">to</span>
                        <input type="text" class="form-control" placeholder="Max" name="max" value="{{$max}}">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Search"/>
                    <a href="/" class="btn btn-primary">Clear all Filter</a>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->nombre }}</td>
                            <td>{{ $product->descripcion }}</td>
                            <td>{{ $product->precio }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
                {!! $products->links() !!}
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
