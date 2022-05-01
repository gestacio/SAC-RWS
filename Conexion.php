<?php 
class Conexion{	  
    public static function conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'condominio');
        define('usuario', 'root');
        define('password', '');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            // echo 'Conexión satisfactoria';
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }

    // public static function close() {
    //     $conexion = null;
    // }
}