<?php
require_once 'modelBD.php';
require 'producto.php';

class  productoModel
{

    function getProducto(){
        try{
            $bd = new DB();
            $res=$bd->select("select * from  producto");
            return $res;
        }catch(Exception $ex){
            echo "<script> console.log('$ex'); </script>";
        }
       
    }
    public function insertarProducto( producto $p)
    {
        try{
            $bd = new DB();
            $nombre=$p->getNombre();
            $precio = $p->getPrecio();
            $precio = $p->getStock();
            $precio = $p->getImagen();
            $sql = "insert into  producto (nombre,precio, stock, imagen) values('$nombre','$precio')";
            $res=$bd->insert($sql);
            return $res;
        }catch(Exception $ex){
            echo $ex;
            echo "<script> console.log('$ex'); </script>";
        }
    }
    public function actualizarProducto( Producto $p)
    {
        try{
            $bd = new DB();
            $id = $p->getId();
            $nombre=$p->getNombre();
            $precio = $p->getPrecio();
            $precio = $p->getStock();
            $precio = $p->getImagen();
            $sql= "update  producto set nombre = '$nombre', precio =  $precio where id producto = $id";
            $res=$bd->insert($sql);
        }catch(Exception $ex){
            echo "<script> console.log('$ex'); </script>";
        }
    }

    public function eliminarProducto( producto $p)
    {
        try{
            $bd = new DB();
            $id = $p->getId();
            $sql = "delete from producto where idproducto = $id";
            echo "<script> console.log(' producto a eliminar: $sql'); </script>";
            $res=$bd->insert($sql);
        }catch(Exception $ex){
            echo "<script> console.log('$ex'); </script>";
        }
    }
}
?>