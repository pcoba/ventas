<?php
class Pais{
    private $id;
    private $nombre;
    private $anio;

    public function __construct($id, $nombre, $anio)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->anio=$anio;
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getAnio()
    {
        return $this->anio;
    }
}
?>