<?php
//Parcial I - Sebastian Narvaez B - 20192578120
class Estudiante{
    private $codigo;
    private $nombre;
    private $apellido;
    private $fecha_n;
    
    public function AeropuertoDAO($codigo="", $nombre="", $apellido="", $fecha_n=""){
        $this -> codigo = $codigo;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> fecha_n = $fecha_n;
    }
    
    public function crear(){
        return "insert into servicios(codigo, nombre, apellido, fecha_n)
            values('" . $this -> codigo . "', '" . $this -> nombre . "', '" . $this -> apellido . "', '" . $this -> fecha_n . "')";
    }
    
    public function consultar(){
        return "select codigo, nombre, apellido, fecha_n, 
                from servicios";
    }
    
}
?>