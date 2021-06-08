<?php
require_once 'modelBD.php';
require 'pais.php';

class PaisModel
{

    function getPais(){
        try{
            $bd = new DB();
            $res=$bd->select("select * from pais");
            return $res;
        }catch(Exception $ex){
            echo "<script> console.log('$ex'); </script>";
        }
       
    }
    public function insertarPais(Pais $p)
    {
        try{
            $bd = new DB();
            $nombre=$p->getNombre();
            $anio = $p->getAnio();
            $sql = "insert into pais (nombre,anio) values('$nombre','$anio')";
            $res=$bd->insert($sql);
            return $res;
        }catch(Exception $ex){
            echo $ex;
            echo "<script> console.log('$ex'); </script>";
        }
    }
    public function actualizarPais(Pais $p)
    {
        try{
            $bd = new DB();
            $id = $p->getId();
            $nombre=$p->getNombre();
            $anio = $p->getAnio();
            $sql= "update pais set nombre = '$nombre', anio =  $anio where idpais = $id";
            $res=$bd->insert($sql);
        }catch(Exception $ex){
            echo "<script> console.log('$ex'); </script>";
        }
    }

    public function eliminarPais(Pais $p)
    {
        try{
            $bd = new DB();
            $id = $p->getId();
            $sql = "delete frompais where idpais = $id";
            echo "<script> console.log('Pais a eliminar: $sql'); </script>";
            $res=$bd->insert($sql);
        }catch(Exception $ex){
            echo "<script> console.log('$ex'); </script>";
        }
    }
}
?>