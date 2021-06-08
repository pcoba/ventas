<?php
require_once('../model/paismodel.php');
$error='';
$objPais = new PaisModel();

if(isset($_POST['insertar'])){
    $p = new Pais($_POST['id'],$_POST['nombre'],$_POST['anio']);
    $error = $objPais->insertarPais($p);
}
if(isset($_POST['actualizar'])){
    $valorId= $_POST['id'];
    $p = new Pais($valorId,$_POST['nombre'],$_POST['anio']);
    $error = $objPais->actualizarPais($p);
}
if(isset($_POST['borrar'])){
    $p = new Pais($_POST['id'],$_POST['nombre'],$_POST['anio']);
    $error = $objPais->eliminarPais($p);
}
if(isset($_POST['otro'])){
    echo "<script> console.log('OK Listo'); </script>";
}

$datos = $objPais->getPais();

require_once('../view/paisView.php');

?>