<?php
class Conexion
{
    public $conexion;

    public function conectar()
    {
        define('servidor', 'localhost');
        define('nombre_bd', 'siscon');
        define('usuario', 'root');
        define('password', '');
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try {
            $this->conexion = new PDO("mysql:host=" . servidor . "; dbname=" . nombre_bd, usuario, password, $opciones);
            // echo 'Conexión satisfactoria';
            return $this->conexion;
        } catch (Exception $e) {
            die("El error de Conexión es: " . $e->getMessage());
        }
    }

    public function insert($consulta)
    {
        $this->conexion = $this->conectar();
        return $this->conexion->exec($consulta);
    }

    public function selectAll($consulta)
    {
        $this->conexion = $this->conectar();
        $resultado = $this->conexion->prepare($consulta);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectOne($consulta)
    {
        $this->conexion = $this->conectar();
        $resultado = $this->conexion->prepare($consulta);
        $resultado->execute();
        return $resultado->fetchColumn(0);
    }

    public function update($consulta)
    {
        $this->conextion = $this->conectar();
        return $this->conexion->exec($consulta);
    }

    public function delete($consulta)
    {
        $this->conexion = $this->conectar();
        return $this->conexion->exec($consulta);
    }
    
    public function close()
    {
        $this->conexion = null;
    }
}

$conexion = new Conexion();
