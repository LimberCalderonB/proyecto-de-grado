<?php
include_once "../modelo_admin/mod_PU.php";

class Controlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new Modelo();
    }

    public function agregarPersona($nombre, $apellido1, $apellido2, $ci, $celular) {
        // Verificar si el CI (DNI) ya existe en la base de datos
        if ($this->modelo->existeCI($ci)) {
            // El CI (DNI) ya está registrado
            return false;
        }

        // Verificar si el número de celular ya existe en la base de datos
        if ($this->modelo->existeCelular($celular)) {
            // El número de celular ya está registrado
            return false;
        }

        return $this->modelo->agregarPersona($nombre, $apellido1, $apellido2, $ci, $celular);
    }

    public function agregarUsuario($nombreUsuario, $pass, $personaId) {
        // Verificar si el nombre de usuario ya existe en la base de datos
        if ($this->modelo->existeNombreUsuario($nombreUsuario)) {
            // El nombre de usuario ya está registrado
            return false;
        }

        return $this->modelo->agregarUsuario($nombreUsuario, $pass, $personaId);
    }

    public function asignarPrivilegio($rolId, $usuarioId) {
        return $this->modelo->asignarPrivilegio($rolId, $usuarioId);
    }

    // Método para obtener el último ID de usuario
    public function obtenerUltimoIdUsuario() {
        return $this->modelo->obtenerUltimoIdUsuario();
    }

    // Método para obtener el último ID de persona
    public function obtenerUltimoIdPersona() {
        return $this->modelo->obtenerUltimoIdPersona();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controlador = new Controlador();
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido1 = isset($_POST['apellido1']) ? $_POST['apellido1'] : '';
    $apellido2 = isset($_POST['apellido2']) ? $_POST['apellido2'] : '';
    $ci = isset($_POST['ci']) ? $_POST['ci'] : '';
    $celular = isset($_POST['celular']) ? $_POST['celular'] : '';
    $nombreUsuario = isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
    $idRol = isset($_POST['idRol']) ? $_POST['idRol'] : '';

    // Verificar que todos los campos obligatorios estén presentes y no estén vacíos
    if (empty($nombre) || empty($apellido1) || empty($apellido2) || empty($ci) || empty($celular) || empty($nombreUsuario) || empty($pass) || empty($idRol)) {
        // Campo obligatorio vacío, redirigir con un mensaje de error
        header("Location: ../vista_Admin/personal.php?error=emptyfields");
        exit();
    }

    // Validar longitud exacta del campo CI (DNI)
    if (strlen($ci) !== 7) {
        // Longitud del CI (DNI) incorrecta, redirigir con un mensaje de error
        header("Location: ../vista_Admin/personal.php?error=invalidci");
        exit();
    }

    // Validar longitud exacta del número de celular
    if (strlen($celular) !== 8) {
        // Longitud del número de celular incorrecta, redirigir con un mensaje de error
        header("Location: ../vista_Admin/personal.php?error=invalidphone");
        exit();
    }

    // Agregar persona
    $resultado = $controlador->agregarPersona($nombre, $apellido1, $apellido2, $ci, $celular);

    if ($resultado) {
        // Obtener el ID de la persona recién agregada
        $personaId = $controlador->obtenerUltimoIdPersona();

        if ($personaId) {
            // Agregar usuario
            $resultadoUsuario = $controlador->agregarUsuario($nombreUsuario, $pass, $personaId);

            if ($resultadoUsuario) {
                // Obtener el ID del usuario recién agregado
                $usuarioId = $controlador->obtenerUltimoIdUsuario();

                // Asignar privilegio
                $resultadoPrivilegio = $controlador->asignarPrivilegio($idRol, $usuarioId);

                if ($resultadoPrivilegio) {
                    // Redireccionar con mensaje de éxito
                    header("Location: ../vista_Admin/personal.php?signup=success");
                    exit();
                } else {
                    // Error al asignar privilegio
                    header("Location: ../vista_Admin/personal.php?error=privilegeassignerror");
                    exit();
                }
            } else {
                // Error al agregar usuario
                header("Location: ../vista_Admin/personal.php?error=useradderror");
                exit();
            }
        } else {
            // Error al obtener el ID de la persona
            header("Location: ../vista_Admin/personal.php?error=getpersoniderror");
            exit();
        }
    } else {
        // Error al agregar persona
        header("Location: ../vista_Admin/personal.php?error=addpersonerror");
        exit();
    }
}
?>
