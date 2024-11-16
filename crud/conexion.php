<?php
class Conexion
{
    private $conexion;
    public function __construct()
    {
        try{
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            $this->conexion = "mysql:host='localhost';dbname='adso_2894667'; charset='utf8mb4'";
            $this->conexion=new PDO($this->conexion,'helder_2894667','#Aprendiz2024',$opciones);
            $this ->conexion->exec('uft8');

        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
    function getConexion(){
        return $this->conexion;
    }
    function cerrarConexion(){
        
    }
}