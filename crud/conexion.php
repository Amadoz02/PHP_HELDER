<?php
class Conexion
{
    private $conexion;
    private $host = 'localhost';
    private $user = 'helder_2894667';
    private $contrasena = '#Aprendiz2024';
    private $db = 'adso_2894667';
    public function __construct()
    {
        try{
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            $this->conexion = 'mysql:host='. $this -> host. ';dbname='.$this -> db . ';charset=utf8mb4';
            $this->conexion=new PDO($this->conexion, $this->user , $this->contrasena ,$opciones);
            $this ->conexion->exec('SET CHARACTER SET utf8');
    
        }catch (Exception $e){
            
        }
    }
    
    function getConexion(){
        return $this->conexion;
    }
    function cerrarConexion(){
        $this->conexion = null;
    }
}