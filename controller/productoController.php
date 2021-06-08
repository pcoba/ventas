<?php
require_once('../model/productoModel.php');
$error='';
$objProducto = new ProductoModel();

if(isset($_POST['insertar'])){
    $p = new Producto($_POST['id'],$_POST['nombre'],$_POST['precio'], $_POST['stock'],$_POST['imagen']);
    $error = $objProducto->insertarProducto($p);
}
if(isset($_POST['actualizar'])){
    $valorId= $_POST['id'];
    $p = new Producto($_POST['id'],$_POST['nombre'],$_POST['precio'], $_POST['stock'],$_POST['imagen']);
    $error = $objProducto->actualizarProducto($p);
}
if(isset($_POST['borrar'])){
    $p = new Producto($_POST['id'],$_POST['nombre'],$_POST['precio'], $_POST['stock'],$_POST['imagen']);
    $error = $objProducto->eliminarProducto($p);
}
if(isset($_POST['otro'])){
    echo "<script> console.log('OK Listo'); </script>";
}

$datos = $objProducto->getProducto();

require_once('../view/productoView.php');

?>