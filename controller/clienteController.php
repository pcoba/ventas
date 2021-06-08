<?php
require_once('../model/clienteModel.php');
$error='';
$objCliente = new ClienteModel();

if(isset($_REQUEST['insertar'])){
    $c = new Cliente('',$_REQUEST['nombre'],$_REQUEST['ruc'],$_REQUEST['sexo'],
    $_REQUEST['insertar'],$_REQUEST['insertar'],$_REQUEST['insertar']);

}

require_once('../view/clienteView.php');

?>