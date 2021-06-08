<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <title>Sistema de Compras ACME</title> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php"></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="carritoView.php" tabindex="-1" aria-disabled="true">Carrito : 
                    <?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);?>
                    </a>
                </li>  
    </ul>
    <table class="table table-ligth">
        <tbody>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <form action="" method="post" class="form-search">
        <td colspan="4" align="right">    
            <input type="search" maxlength="30" name="busqueda" id="busqueda" placeholder="buscar productos">
            </td> 
            <td align="right">
            <input type="submit" name="btnAccion" value="Buscar" class="btn-search">
            </td>
        </form>
        
        </tbody>
    </table>
        </div>
    </nav>
    <br>
    <br>