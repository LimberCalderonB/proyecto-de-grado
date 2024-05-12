<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda de Ropa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Estilos personalizados */
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    .navbar {
      background-color: #343a40 !important;
    }
    .navbar-brand {
      font-weight: bold;
      color: #fff !important;
    }
    .jumbotron {
      background-image: url('ropa.jpg');
      background-size: cover;
      background-position: center;
      color: #fff;
      padding: 100px 0;
      text-align: center;
    }
    .jumbotron h1 {
      font-size: 3rem;
      font-weight: bold;
      margin-bottom: 30px;
    }
    .jumbotron p {
      font-size: 1.5rem;
    }
    .card {
      border: none;
      transition: transform 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .footer {
      background-color: #343a40;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Mi Tienda de Ropa</a>
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

  <!-- Contenido principal -->
  <div class="container mt-5">
    <div class="row">
      <!-- Producto Destacado -->
      <div class="col-md-7 mb-4">
        <div class="card shadow">
          <img src="img/vestido1.jpg" class="card-img-top" alt="Producto 1">
          <div class="card-body">
            <h5 class="card-title">Vestido</h5>
            <p class="card-text">Una camisa a cuadros elegante y cómoda para cualquier ocasión.</p>
            <a href="#" class="btn btn-primary">Ver detalles</a>
          </div>
        </div>
      </div>
      <!-- Lista de Productos -->
      <div class="col-md-5">
        <!-- Primer Producto -->
        <div class="card mb-4 shadow">
          <img src="img/vestido1.jpg" class="card-img-top" alt="Producto 2">
          <div class="card-body">
            <h5 class="card-title">Vestido</h5>
            <p class="card-text">Un par de jeans modernos y desgastados, perfectos para un look casual.</p>
            <a href="#" class="btn btn-primary">Ver detalles</a>
          </div>
        </div>
        <!-- Segundo Producto -->
        <div class="card mb-4 shadow">
          <img src="img/vestido1.jpg" class="card-img-top" alt="Producto 3">
          <div class="card-body">
            <h5 class="card-title">Vestido</h5>
            <p class="card-text">Una chaqueta de cuero clásica y resistente que nunca pasa de moda.</p>
            <a href="#" class="btn btn-primary">Ver detalles</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pie de página -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2024 Mi Tienda de Ropa. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
