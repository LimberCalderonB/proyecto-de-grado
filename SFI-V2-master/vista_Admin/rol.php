<?php
session_start(); // Aquí se inicia la sesión

include_once "cabecera.php";

if(isset($_SESSION['registro_exitoso_rol']) && $_SESSION['registro_exitoso_rol'] == true){
    echo "<script>
    Swal.fire({
        title: 'Rol Registrado',
        text: 'El rol ha sido registrado exitosamente',
        icon: 'success'
    });
    </script>";
    unset($_SESSION['registro_exitoso_rol']); 
} elseif(isset($_SESSION['error_rol']) && $_SESSION['error_rol'] == true) {
    echo "<script>
    Swal.fire({
        title: 'Error',
        text: '{$_SESSION['mensaje_rol']}',
        icon: 'error'
    });
    </script>";
    unset($_SESSION['error_rol']); 
    unset($_SESSION['mensaje_rol']); 
}
?>

        <section class="full-width header-well">
            <div class="full-width header-well-icon">
                <i class="zmdi zmdi-washing-machine"></i>
            </div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis accusamus fuga harum natus molestias necessitatibus.
                </p>
            </div>
        </section>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
                <a href="#tabNewProduct" class="mdl-tabs__tab is-active">NUEVO</a>
                <a href="#tabListProducts" class="mdl-tabs__tab">LISTA DE ROLES</a>
            </div>
            <div class="mdl-tabs__panel is-active" id="tabNewProduct">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <div class="full-width panel mdl-shadow--2dp">
                            <div class="full-width panel-tittle bg-primary text-center tittles">
                                Nuevo Rol
                            </div>
                            <div class="full-width panel-content">
                            <form action="../controlador_admin/ct_rol.php" method="post" class="row g-3 needs-validation" novalidate>
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
            <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFORMACION</legend><br>
        </div>
        
        <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="nombre" name="nombre">
                <label class="mdl-textfield__label" for="nombre">Rol</label>
                
            </div>
        </div>
    </div>
    <p class="text-center">
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="agregar" type="submit">
            <i class="zmdi zmdi-plus"></i>
        </button>
        <div class="mdl-tooltip" for="agregar">Agregar Rol</div>
        <span class="mdl-textfield__error">ingrese el rol </span>
                
    </p>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="mdl-tabs__panel" id="tabListProducts">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                        <form action="#">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="searchProduct">
                                    <i class="zmdi zmdi-search"></i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input" type="text" id="searchProduct">
                                    <label class="mdl-textfield__label"></label>
                                </div>
                            </div>
                        </form>
                    
                        <div class="full-width text-center" style="padding: 30px 0;">
                            
                            <!--mostrar los roles de la DB-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    
    <?php
    include_once "pie.php";
    ?>
</body>
</html>
