<?php
require 'modelBD.php';
require 'cliente.php';

class ClienteModel
{

    function getCliente(){
        try{
            $bd = new DB();
            $res=$bd->select("select * from cliente");
        }catch(Exception $ex){
            echo $ex;
        }
       
    }
    public function insertarCliente(Cliente $c)
    {
        try{
            $bd = new DB();
            $res=$bd->insert("insert into cliente (nombre, ruc, sexo, direccion, estado, imagen, cupo, observacion) 
            values(
                $c->getNombre(),
                $c->getRuc(),
                $c->getSexo(),
                $c->getDireccion(),
                $c->getEstado(),
                $c->getImagen(),
                $c->getCupo(),
                $c->getObservacion()
            )");
        }catch(Exception $ex){

        }
    }
}
?>