<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <title>Pais</title>
</head>
<body>
    <div class="container">
        <h1>Paises</h1> 
        <div >
        <form action="#" id="form1" method="POST">
            Id: <input class="form-control" type="text" name="id" id="id" readonly>
            Nombre: <input class="form-control" type="text" name="nombre" id="nombre" required>
            Anio: <input class="form-control" type="text" name="anio" id="anio" required>
            <input type="reset" class="btn btn-primary" value="Nuevo" 
            onclick="$('#g').attr('disabled',false)">
            <input type="submit" value="Guardar" id="g" name="insertar" class="btn btn-primary"
            disabled="true">
            <input type="submit" value="Modificar" id="actualizar" name="actualizar" class="btn btn-warning">
            <input type="submit" value="Eliminar" id="borrar" name="borrar" class="btn btn-danger" onclick="return confirmation()">
        </form>
        <table class="table table-dark">
            <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Anio</th>
            <th>Accion</th>
            </tr>
            <?php
                foreach($datos as $d){
                    $id= $d['idpais'];
                    $nombre = str_replace(" ","&nbsp;",$d['nombre']);
                    $anio = $d['anio'];
                    echo "<tr>
                    <td>$id</td>
                    <td>$nombre</td>
                    <td>$anio</td>
                    <td>
                    <button onclick=$('#id').val('$id');$('#nombre').val('$nombre');$('#anio').val('$anio');
                    class='btn btn-warning'>Seleccionar</button>
                    
                    </td>
                    </tr>";
                }
            ?>
        </table>
        </div>
    </div>
    <script type="text/javascript">
     function confirmation() 
     {
        if(confirm("Seguro que desea borrar el pais seleccionado? "))
            {
                return true;
            }
            else
            {
                return false;
            }
     }
    </script>    
</body>
</html>

<?php

?>