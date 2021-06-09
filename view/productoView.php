<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script src="js/table.js"></script>
    <title>Productos</title>
</head>
<body>
    <div class="container">
        <h1>Productos</h1> 
        <div class="col-5">
        <form action="#" id="form1" method="POST">
            Id: <input class="form-control" type="text" name="id" id="id" readonly>
            Código: <input class="form-control" type="text" name="codigo" id="codigo">
            Nombre: <input class="form-control" type="text" name="nombre" id="nombre" required>
            Descripcion: <input class="form-control" type="text" name="descripcion" id="descripcion">
            Precio: <input class="form-control" type="text" name="precio" id="precio">
            Stock: <input class="form-control" type="text" name="stock" id="stock">
            Imagen: <input class="form-control" type="file" name="imagen" id="imagen">
            Estado: <input type="radio" id="estado_activo" name="estado" value="activo">
            <label for="activo">Activo</label>
            <input type="radio" id="estado_inactivo" name="estado" value="inactivo">
            <label for="inactivo">Inactivo</label><br>
            <label for="tipo">Seleccione un tipo:</label>
            <select name="tipo" id="tipo">
            <option value="1">Laptop</option>
            <option value="2">Accesorios</option>
            <option value="3">USB</option>
            <option value="4">PAN</option>
            </select>
            <hr>
            <input type="reset" class="btn btn-primary" value="Nuevo" 
            onclick="$('#g').attr('disabled',false)">
            <input type="submit" value="Guardar" id="g" name="insertar" class="btn btn-primary"
            disabled="true">
            <input type="submit" value="Modificar" id="actualizar" name="actualizar" class="btn btn-warning">
            <input type="submit" value="Eliminar" id="borrar" name="borrar" class="btn btn-danger" onclick="return confirmation()">
        </form>
        <hr>
        <table id="tabla" class="paginated">
            <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Accion</th>
            </tr>
            <?php $num_rows = count($datos);
                echo "<h1> Numero de filas: ".$num_rows;
                foreach($datos as $d){
                    $id= $d['idproducto'];
                    $nombre = str_replace(" ","&nbsp;",$d['nombre']);
                    $precio = $d['precio'];
                    echo "<tr>
                    <td>$id</td>
                    <td>$nombre</td>
                    <td>$precio</td>
                    <td>
                    <button onclick=$('#id').val('$id');$('#nombre').val('$nombre');$('#precio').val('$precio');
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
        if(confirm("Seguro que desea borrar el producto seleccionado? "))
            {
                return true;
            }
            else
            {
                return false;
            }
     }
    </script>    

<div class="row">
    <?php $detalle=0; foreach($datos as $productos){ ?>
    <div class="<?php if($detalle==1) {echo 'col-6';} else {echo 'col-2';}?>">
        <br>
        <div class="card">
            <img src="<?php echo $productos['imagen'];?>" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $productos['nombre'];?></h5>
                <p class="card-text">$. <?php echo $productos['precio'];?></p>
                <?php if($detalle==1){?>
                    <p class="card-text">$. <?php echo $productos['stock'];?></p>
                    <p class="card-text">$. <?php echo $productos['descripcion'];?></p>
                <?php }?>
                <?php  $quantity = $productos['stock'];?>
                <form action="" method="post">
                    <div>Cantidad:
                        <select name="cantidad" id="cantidad">
                        <?php for($i=1;$i<=$quantity;$i++){?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php }?>
                        </select> 
                    </div>
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($productos['idproducto'],COD,KEY);?>">    
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($productos['nombre'],COD,KEY);?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($productos['precio'],COD,KEY);?>">
                    <button type="submit" name="btnAccion" value="Detalle">Ver detalle</button>
                    <button class="btn btn-primary" type="submit" name="btnAccion" value="Agregar">Agregar</button>
                </form>
            </div>
        </div>
    </div>
    <?php $bd=0; $detalle=0;} 
   ?>
</div>
</body>
</html>

<?php

?>