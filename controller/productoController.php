<?php
require_once('../model/productoModel.php');
$error='';
$objProducto = new ProductoModel();

$datos = $objProducto->getProducto();

require_once('../view/productView.php');

?>