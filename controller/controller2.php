<?php
// (A) DATABASE CONNECTION
require "model/modelBD.php";
$DB = new DB();
if(isset($_POST['search']))
    $filtro = $_POST['search'];
else
    $filtro="";
$sentencia = "SELECT * FROM cliente WHERE nombre LIKE '%".$filtro."%'";
// (B) SEARCH FOR CLIENTES
$results = $DB->select(
    $sentencia
  //"SELECT * FROM cliente WHERE nombre LIKE ?",
  //["'%{$_POST['search']}%'"]
);

// (C) OUTPUT RESULTS
echo json_encode(count($results)==0 ? null : $results);
?>