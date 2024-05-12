<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario Login y Registro de Usuarios</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* Estilos personalizados */
    body {
    background-color: #f8f9fa;
    font-family: "Ubuntu", helvetica;
    }
    a {
        text-decoration: none;
        color: #1ab188;
        transition: .5s ease;
    }
    a:hover {
        color: #0f9d58;
    }
    .contenedor-formularios {
        background: rgba(19, 35, 47,.9);
        padding: 40px;
        max-width: 600px;
        margin: 40px auto;
        border-radius: 4px;
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47,.3);
    }
    .contenedor-tabs {
        list-style: none;
        padding: 0;
        margin: 0 0 40px 0;
        overflow: hidden; /* Añadido para clearfix */
    }
    .contenedor-tabs li {
        float: left; /* Añadido para alinearlos horizontalmente */
        width: 50%; /* Ajuste para que ocupen el 50% del ancho */
    }
    .contenedor-tabs li a {
        display: block;
        text-decoration: none;
        padding: 15px;
        background: rgba(160, 179, 176,.25);
        color: #a0b3b0;
        font-size: 20px;
        text-align: center;
        cursor: pointer;
        transition: .5s ease;
    }
    .contenedor-tabs li a:hover {
        background: #1ab188;
        color: #fff;
    }
    .contenedor-tabs li.active a {
        background: #1ab188;
        color: #fff;
    }
    .contenido-tab > div:last-child {
        display: none;
    }
    h1 {
        text-align: center;
        color: #fff;
        font-weight: 300;
        margin: 0 0 40px;
    }
    label {
        position: absolute;
        transform: translateY(6px);
        left: 13px;
        color: rgba(255, 255, 255,.5);
        transition: all 0.25s ease;
        -webkit-backface-visibility: hidden;
        pointer-events: none;
        font-size: 22px;
    }
    label.active {
        transform: translateY(50px);
        left: 2px;
        font-size: 14px;
    }
    label.highlight {
        color: #fff;
    }
    input {
        font-size: 22px;
        display: block;
        width: 100%;
        height: 100%;
        padding: 5px 10px;
        background: none;
        background-image: none;
        border: 1px solid #a0b3b0;
        border-top: none;
        border-left: none;
        border-right: none;
        color: #fff;
        border-radius: 0;
        transition: all 0.5s ease;
        border-radius: 5px;
    }
    .contenedor-input {
        position: relative;
        margin-bottom: 40px;
    }
    .fila-arriba:after {
        content: "";
        display: table;
        clear: both;
    }
    .fila-arriba div {
        float: left;
        width: 48%;
        margin-right: 4%;
    }
    .fila-arriba div:last-child {
        margin: 0;
    }
    .button {
        border: 0;
        outline: none;
        border-radius: 5px;
        cursor: pointer;
        padding: 15px 0;
        font-size: 2rem;
        background: #1ab188;
        color: #fff;
        transition: all .5s ease;
        -webkit-appearance: none;
    }
    .button:hover,
    .button:focus {
        background: #0f9d58;
    }
    .button-block {
        display: block;
        width: 50%;
        margin-right: 0;
    }
    .forgot {
        margin-top: -20px;
        text-align: right;
        margin-bottom: 20px;
    }
    /* Mediaqueries */
    @media screen and (max-width: 500px) {
        .fila-arriba div {
            width: 100%;
        }
    }
    @media screen and (max-width: 400px) {
        .contenedor-tabs li a {
            width: 100%;
        }
    }
</style>
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">Mi Tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="producto.php">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
        </ul>
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="login.php">Iniciar sesión</a>
        </li>
        </ul>
    </div>
    </div>
</nav>

<!-- Formularios -->
<div class="contenedor-formularios">
    <!-- Links de los formularios -->
    <ul class="contenedor-tabs">
        <li class="tab tab-segunda active"><a href="#iniciar-sesion">Iniciar Sesión</a></li>
        <li class="tab tab-primera"><a href="#registrarse">Registrarse</a></li>
    </ul>

    <!-- Contenido de los Formularios -->
    <div class="contenido-tab">
        <!-- Iniciar Sesion -->
        <div id="iniciar-sesion">
            <h1>Iniciar Sesión</h1>
            <form action="#" method="post">
                <div class="contenedor-input">
                    <label>
                        Usuario <span class="req">*</span>
                    </label>
                    <input id="nombreUsuario" type="text" required>
                </div>
                <div class="contenedor-input">
                    <label>
                        Contraseña <span class="req">*</span>
                    </label>
                    <input id="pass" type="password" required>
                </div>
                <p class="forgot"><a href="SBP-master/home.html">Se te olvidó la contraseña?</a></p>
                <input type="submit" class="button button-block" value="Iniciar Sesión">   
            </form>
        </div>
        <!-- Registrarse -->
        <div id="registrarse">
            <h1>Registrarse</h1>
            <form action="#" method="post">
                <div class="fila-arriba">
                    <div class="contenedor-input">
                        <label>
                            Nombre <span class="req">*</span>
                        </label>
                        <input id="nombre" type="text" required >
                    </div>

                    <div class="contenedor-input">
                        <label>
                            Apellido<span class="req">*</span>
                        </label>
                        <input id="apellido" type="text" required>
                    </div>
                </div>
                    <div class="contenedor-input">
                        <label>
                            Celular <span class="req">*</span>
                        </label>
                        <input id="celular" type="numb" required>
                    </div>
                
                <div class="contenedor-input">
                    <label>
                        Usuario <span class="req">*</span>
                    </label>
                    <input id="nombreUsuario" type="text" required>
                </div>
                
                <div class="contenedor-input">
                    <label>
                        Contraseña <span class="req">*</span>
                    </label>
                    <input id="pass" type="password" required>
                </div>

                <input type="submit" class="button button-block" value="Registrarse">
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        
        $(".contenedor-formularios").find("input, textarea").on("keyup blur focus", function (e) {

            var $this = $(this),
                label = $this.prev("label");

            if (e.type === "keyup") {
                if ($this.val() === "") {
                    label.removeClass("active highlight");
                } else {
                    label.addClass("active highlight");
                }
            } else if (e.type === "blur") {
                if($this.val() === "") {
                    label.removeClass("active highlight"); 
                    } else {
                    label.removeClass("highlight");   
                    }   
            } else if (e.type === "focus") {
                if($this.val() === "") {
                    label.removeClass("highlight"); 
                } 
                else if($this.val() !== "") {
                    label.addClass("highlight");
                }
            }

        });

        $(".tab a").on("click", function (e) {

            e.preventDefault();

            $(this).parent().addClass("active");
            $(this).parent().siblings().removeClass("active");

            target = $(this).attr("href");

            $(".contenido-tab > div").not(target).hide();

            $(target).fadeIn(600);

        });
        
    });
</script>
</body>
</html>
