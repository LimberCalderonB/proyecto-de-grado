<?php
include_once "cabecera.php";
?>

<section class="full-width header-well">
    <div class="full-width header-well-icon">
        <i class="zmdi zmdi-account"></i>
    </div>
    <div class="full-width header-well-text">
        <p class="text-condensedLight">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis accusamus fuga harum natus molestias necessitatibus.
        </p>
    </div>
</section>
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="#tabNewAdmin" class="mdl-tabs__tab is-active">NUEVO</a>
        <a href="#tabListAdmin" class="mdl-tabs__tab">LISTA DE PERSONAL</a>
    </div>
    <div class="mdl-tabs__panel is-active" id="tabNewAdmin">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <div class="full-width panel mdl-shadow--2dp">
                    <div class="full-width panel-tittle bg-primary text-center tittles">
                        Nuevo Personal
                    </div>
                    <div class="full-width panel-content">
                        <form action="../controlador_admin/ct_PU.php" method="post" id="formulario">
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col">
                                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFROMACION</legend><br>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="ci" name="ci">
                                        <label class="mdl-textfield__label" for="ci">DNI</label>
                                        <span class="mdl-textfield__error">Numero Invalido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="[A-Za-záéíóúÁÉÍÓÚ ]*" id="nombre" name="nombre">
                                        <label class="mdl-textfield__label" for="nombre">Nombre</label>
                                        <span class="mdl-textfield__error">Nombre Invalido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="apellido1" name="apellido1">
                                        <label class="mdl-textfield__label" for="apellido1">Apellido Paterno</label>
                                        <span class="mdl-textfield__error">Apellido Invlaido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="apellido2" name="apellido2">
                                        <label class="mdl-textfield__label" for="apellido2">Apellido Materno</label>
                                        <span class="mdl-textfield__error">Apellido Invlaido</span>
                                    </div>
                                </div>
                                <!--solo 8 caracteres ni mas ni menos-->
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="celular" name="celular">
                                        <label class="mdl-textfield__label" for="celular">Celular</label>
                                        <span class="mdl-textfield__error">Numero de Celular Invalido</span>
                                    </div>
                                </div>

                                <div class="mdl-cell mdl-cell--12-col">
                                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; TIPO DE CARGO</legend><br>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <select class="mdl-textfield__input" name="idRol" id="idRol">
                                            <option value="" disabled="" selected="">Selecciona Rol</option>
                                            <?php
                                            $conexion = mysqli_connect("localhost", "root", "", "proyecto");

                                            $query = "SELECT idrol, nombre FROM rol";
                                            $result = mysqli_query($conexion, $query);
                                            while ($fila = mysqli_fetch_assoc($result)) {
                                                echo "<option value=\"" . $fila['idrol'] . "\">" . $fila['nombre'] . "</option>";
                                            }
                                            mysqli_close($conexion);
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Detelles de Cuenta</legend><br>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ]*(\.[0-9]+)?" id="nombreUsuario" name="nombreUsuario">
                                        <label class="mdl-textfield__label" for="nombreUsuario">Nombre de Usuario</label>
                                        <span class="mdl-textfield__error">Nombre de Usuario Invalido</span>
                                    </div>
                                </div>
                                <!--la contraceña de admin debe de exigir caracteres especiales
                                un minimo de 10 caracteres-->
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="password" id="pass" name="pass">
                                        <label class="mdl-textfield__label" for="pass">Contraceña</label>
                                        <span class="mdl-textfield__error">Contraceña Invalida</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Elegir Avatar</legend><br>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                                    <div class="mdl-grid">
                                        <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                                <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="avatar-male.png">
                                                <img src="../assets/img/avatar-male.png" alt="avatar" style="height: 45px; width="45px;" ">
                                                <span class="mdl-radio__label">Avatar 1</span>
                                            </label>
                                        </div>
                                        <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                                <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="avatar-female.png">
                                                <img src="../assets/img/avatar-female.png" alt="avatar" style="height: 45px; width="45px;" ">
                                                <span class="mdl-radio__label">Avatar 2</span>
                                            </label>
                                        </div>
                                        <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                                <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="avatar-male2.png">
                                                <img src="../assets/img/avatar-male2.png" alt="avatar" style="height: 45px; width="45px;" ">
                                                <span class="mdl-radio__label">Avatar 3</span>
                                            </label>
                                        </div>
                                        <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
                                                <input type="radio" id="option-4" class="mdl-radio__button" name="options" value="avatar-female2.png">
                                                <img src="../assets/img/avatar-female2.png" alt="avatar" style="height: 45px; width="45px;" ">
                                                <span class="mdl-radio__label">Avatar 4</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center">
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="agregar">
                                    <i class="zmdi zmdi-plus"></i>
                                </button>
                                <div class="mdl-tooltip" for="agregar">AGREGAR</div>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mdl-tabs__panel" id="tabListAdmin">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                <div class="full-width panel mdl-shadow--2dp">
                    <div class="full-width panel-tittle bg-success text-center tittles">
                        LISTA DE EMPLEADOS
                    </div>
                    <div class="full-width panel-content">
                        <form action="#">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="searchAdmin">
                                    <i class="zmdi zmdi-search"></i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input" type="text" id="searchAdmin">
                                    <label class="mdl-textfield__label"></label>
                                </div>
                            </div>
                        </form>
                        <div class="mdl-list">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once "pie.php";
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('formulario').addEventListener('submit', function (event) {
            var nombre = document.getElementById('nombre').value.trim();
            var apellido1 = document.getElementById('apellido1').value.trim();
            var apellido2 = document.getElementById('apellido2').value.trim();
            var ci = document.getElementById('ci').value.trim();
            var celular = document.getElementById('celular').value.trim();
            var nombreUsuario = document.getElementById('nombreUsuario').value.trim();
            var pass = document.getElementById('pass').value.trim();
            var idRol = document.getElementById('idRol').value;

            var camposValidos = true;

            // Validar campos obligatorios
            if (nombre === '' || apellido1 === '' || apellido2 === '' || ci === '' || celular === '' || nombreUsuario === '' || pass === '' || idRol === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'FALTAN DATOS PAPU',
                });
                camposValidos = false;
            }

            // Validar longitud del campo CI (DNI)
            if (ci.length !== 7) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'FALTAN DATOS PAPU',
                });
                camposValidos = false;
            }

            // Validar longitud del campo celular
            if (celular.length !== 8) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'FALTAN DATOS PAPU',
                });
                camposValidos = false;
            }

            // Validar longitud y complejidad de la contraseña
            if (pass.length < 8 || !/[0-9]/.test(pass) || !/[a-zA-Z]/.test(pass) || !/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(pass)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'FALTAN DATOS PAPU',
                });
                camposValidos = false;
            }

            // Si algún campo no es válido, evitar el envío del formulario
            if (!camposValidos) {
                event.preventDefault(); // Evitar que el formulario se envíe
            } else {
                // Todos los campos son válidos, mostrar mensaje de éxito
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "GUARDADO",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    });
</script>
