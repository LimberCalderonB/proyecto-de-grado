<?php
include_once "conexion/conexionBase.php";

class Modelo {
    private $conexion;

    public function __construct() {
        $this->conexion = new conexionBase();
    }

    public function agregarPersona($nombre, $apellido1, $apellido2, $ci, $celular) {
        $this->conexion->CreateConnection();
        $sql = "INSERT INTO persona (nombre, apellido1, apellido2, ci, celular) VALUES ('$nombre', '$apellido1', '$apellido2', $ci, '$celular')";
        $result = $this->conexion->ExecuteQuery($sql);
        $this->conexion->CloseConnection();
        return $result;
    }

    public function agregarUsuario($nombreUsuario, $pass, $personaId) {
        $this->conexion->CreateConnection();
        $sql = "INSERT INTO usuario (nombreUsuario, pass, persona_idpersona) VALUES ('$nombreUsuario', '$pass', $personaId)";
        $result = $this->conexion->ExecuteQuery($sql);
        $this->conexion->CloseConnection();
        return $result;
    }

    public function asignarPrivilegio($rolId, $usuarioId) {
        $this->conexion->CreateConnection();
        $sql = "INSERT INTO privilegio (rol_idrol, usuario_idusuario) VALUES ($rolId, $usuarioId)";
        $result = $this->conexion->ExecuteQuery($sql);
        $this->conexion->CloseConnection();
        return $result;
    }

    // Método para obtener el último ID de usuario
    public function obtenerUltimoIdUsuario() {
        $this->conexion->CreateConnection();
        $sql = "SELECT MAX(idusuario) AS ultimoId FROM usuario";
        $result = $this->conexion->ExecuteQuery($sql);
        $row = $this->conexion->GetRows($result);
        $this->conexion->CloseConnection();
        return $row[0]; // Devuelve el último ID de usuario
    }

    // Método para obtener el último ID de persona
    public function obtenerUltimoIdPersona() {
        $this->conexion->CreateConnection();
        $sql = "SELECT MAX(idpersona) AS ultimoId FROM persona";
        $result = $this->conexion->ExecuteQuery($sql);
        $row = $this->conexion->GetRows($result);
        $this->conexion->CloseConnection();
        return $row[0]; // Devuelve el último ID de persona
    }

    public function existeCI($ci) {
        $this->conexion->CreateConnection();
        $sql = "SELECT COUNT(*) AS count FROM persona WHERE ci = '$ci'";
        $result = $this->conexion->ExecuteQuery($sql);
        $row = $this->conexion->GetRows($result);
        $this->conexion->CloseConnection();
    
        // Verificar si se encontró algún registro con el CI proporcionado
        if ($row && isset($row['count'])) {
            return $row['count'] > 0;
        } else {
            // Si no se encontraron resultados, se asume que el CI no existe
            return false;
        }
    }

    public function existeCelular($celular) {
        $this->conexion->CreateConnection();
        $sql = "SELECT COUNT(*) AS count FROM persona WHERE celular = '$celular'";
        $result = $this->conexion->ExecuteQuery($sql);
        $row = $this->conexion->GetRows($result);
        $this->conexion->CloseConnection();
    
        // Verificar si se encontró algún registro con el número de celular proporcionado
        if ($row && isset($row['count'])) {
            return $row['count'] > 0;
        } else {
            // Si no se encontraron resultados, se asume que el número de celular no existe
            return false;
        }
    }

    public function existeNombreUsuario($nombreUsuario) {
        $this->conexion->CreateConnection();
        $sql = "SELECT COUNT(*) AS count FROM usuario WHERE nombreUsuario = '$nombreUsuario'";
        $result = $this->conexion->ExecuteQuery($sql);
        $row = $this->conexion->GetRows($result);
        $this->conexion->CloseConnection();
    
        // Verificar si se encontró algún registro con el nombre de usuario proporcionado
        if ($row && isset($row['count'])) {
            return $row['count'] > 0;
        } else {
            // Si no se encontraron resultados, se asume que el nombre de usuario no existe
            return false;
        }
    }
    
    
    
}
?>
