<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Productos</title>
</head>
<body>
    <h1>Listado de productos</h1>
    <div class="container">
        <table class="table table-dark">
            <tbody>
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Imagen</th>
                </tr>
                <?php foreach($datos as $productos) {  
                    $id = $productos['idproducto'];
                    $nombre = $productos['nombre'];
                    $precio = $productos['precio'];
                    $stock = $productos['stock'];
                    $imagen = $productos['imagen'];
                    echo "
                    <tr>
                    <td>$id</td><td>$nombre</td><td>$precio</td><td>$stock</td><td>$imagen</td>
                    </tr>
                    ";
                    
                    }?>
            </tbody>
        </table>
    </div>
</body>
</html>