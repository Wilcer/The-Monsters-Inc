<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7e73ebaf62.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="img/logo.png" style="max-width:100%;width:100px;height:auto; text-align:left;" />
	<title> servimedi </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="reloj/ssty.css">
  <link rel="stylesheet" type="text/css" href="css/small.css">


</head>
<body>
	
<div class="container-fluid bg-secondary">
	
	<img src="img/logo2.png" style="max-width:30%;">

</div>

<nav class="navbar navbar-expand-md navbar-dark bg-info sticky-top">
  <a class="navbar-brand" href="#"><i class="fas fa-home"></i> Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fab fa-buffer"></i> 
          Movimientos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-cart-plus"></i> Compras</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fas fa-truck"></i> Ventas</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fas fa-box-open"></i> 
          Inventario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-barcode"></i> Productos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fab fa-stack-overflow"></i> Categorias</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="far fa-folder-open"></i> Reportes</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="far fa-file"></i></i> Reporte Compras</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="far fa-file"></i> Reporte Ventas</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fas fa-user"></i> 
          Personas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Clientes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Proveedores</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="#"><i class="fas fa-sign-out-alt"></i> Salir</a>
      </li>
    </ul>
  </div>
</nav>

 

<!-- area para colocar nuevo codigo -->
<center>

<div class="wrap" >
    <div class="widget">
      <div class="fecha">
        <p id="diaSemana" class="diaSemana">Martes</p>
        <p id="dia" class="dia">27</p>
        <p>de </p>
        <p id="mes" class="mes">Octubre</p>
        <p>del </p>
        <p id="year" class="year">2015</p>
      </div>

      <div class="reloj">
        <p id="horas" class="horas">11</p>
        <p>:</p>
        <p id="minutos" class="minutos">48</p>
        <p>:</p>
        <div class="caja-segundos">
          <p id="ampm" class="ampm">AM</p>
          <p id="segundos" class="segundos">12</p>
        </div>
      </div>
    </div>
  </div>
</center>







<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="reloj/reloj.js"></script>
</body>

</html>