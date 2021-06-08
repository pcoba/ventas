<?php

class Cliente {  
    private $idCliente;  
    private $nombre;  
    private $ruc;  
    private $sexo;
    private $direccion;
    private $estado;
    private $imagen;
    private $cupo;
    private $observacion;
      
    public function __construct($idCliente,$nombre,$ruc,$sexo,$direccion,$estado,$imagen,$cupo,$observacion)    
    {    
        $this->idCliente = $idCliente;  
        $this->nombre = $nombre;  
        $this->ruc = $ruc;  
        $this->sexo = $sexo;  
        $this->direccion = $direccion;  
        $this->estado = $estado;  
        $this->imagen = $imagen;  
        $this->cupo = $cupo;  
        $this->observacion = $observacion;  
    }   

    public function getId()
    {
        return $this->idCliente;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getRuc()
    {
        return $this->ruc;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function getDireccion()
    {
        $this->direccion;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function getImagen()
    {
        return $this->imagen;
    }
    public function getCupo()
    {
        return $this->cupo;
    }
    function getObservacion()
    {
        return $this->observacion;
    }

}  
?>