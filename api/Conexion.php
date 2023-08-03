<?php
class Conexion
{
    public $conexion;

    public function conectar()
    {
        $servidor = 'localhost';
        $nombre_bd = 'siscon';
        $usuario = 'root';
        $password = '';
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try {
            $this->conexion = new PDO("mysql:host=" . $servidor . "; dbname=" . $nombre_bd, $usuario, $password, $opciones);
            // $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Conexión satisfactoria';
            return $this->conexion;
        } catch (Exception $e) {
            die("El error de Conexión es: " . $e->getMessage());
        }
    }

    public function insert($consulta)
    {
        $this->conexion = $this->conectar();
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
        $this->conexion = $this->conectar();
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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



function registro_guardado($web_anterior) {
    echo "<script type='text/javascript'>
    alert('Registro Guardado exitosamente');
    window.location.replace('$web_anterior');
    </script>";
}

function registro_fallido($ex) {
    var_dump($ex);
    echo '<script type="text/javascript">
        alert("No se ha podido ingresar correctamente el registro");
        // window.location.replace("propietarios.php");
        </script>';
}