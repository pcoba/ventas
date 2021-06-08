<?php
echo "bienvenido";
require_once 'libs/app.php';

include_once('controller/controller.php');
include_once('controller/controller2.php');

$app = new App();

$controller = new Controller();  
$controller->invoke();  

//header ('Location: controller/paisController.php');

?>