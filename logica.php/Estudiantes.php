<?php
//Parcial I - Sebastian Narvaez B - 20192578120
require_once 'persistencia/Conexion.php';
require_once 'persistencia/Estudiante.php';

class Estudiantes{
    private $codigo;
    private $nombre;
    private $apellido;
    private $fecha_n;
    
    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    
    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
    /**
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }
    
    /**
     * @return string
     */
    public function getFecha_n()
    {
        return $this->fecha_n;
    }
    
    /**
     * @return Conexion
     */
    public function getConexion()
    {
        return $this->conexion;
    }
    
    /**
     * @return Estudiante
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }
    
    public function Estudiantes($codigo="", $nombre="", $apellido="", $fecha_n=""){
        $this -> codigo = $codigo;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> fecha_n = $fecha_n;
        $this -> conexion = new Conexion();
        $this -> estudiante = new Estudiante($this -> codigo, $this -> nombre, $this -> apellido, $this -> fecha_n);
    }
    
    public function crear(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> Estudiante -> crear());
        $this -> conexion -> cerrar();
    }
    
 ?>