<?php include 'meta.php' ?>
     <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="css/style.css" rel="stylesheet">
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <title>Formulario | Restaurante</title>
</head>
<body >
<?php include '../Models/funciones.php'; sessionstar();?>

 <div id="particles-js"></div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style=" opacity:80%;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
     <img src="img/logo.png" width="30" height="30" class=" d-inline-block align-top" alt="">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    
<?php 

            if (base64_decode($_GET["funcion"])=="admin") {
              
                echo '<li class="nav-item active"><a class="nav-link"  href="nav.php?id='.$_GET["id"].'&funcion='.$_GET["funcion"].'"><strong>Home <span class="sr-only">(current)</span></strong></a></li> 

                    <li class="nav-item"><a class="nav-link"  href="sing_free.php?id='.$_GET["id"].'&funcion='.$_GET["funcion"].'&funcion='.$_GET["funcion"].'"><strong>Crear Usuario</strong></a> </li>

                    <li class="nav-item"><a class="nav-link"  href="password.php?id='.$_GET["id"].'&funcion='.$_GET["funcion"].'"><strong>Cambiar Contraseña</strong></a></li>

                    ';

                    /*
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuarios
                      </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="sing_free.php?id='.$_GET["id"].'&funcion='.$_GET["funcion"].'"><strong>Crear Usuario</strong></a>
                          <a class="dropdown-item" href="password.php?id='.$_GET["id"].'&funcion='.$_GET["funcion"].'"><strong>Cambiar Contraseña</strong></a>
                        </div>

                      </li>
                      */

              }if (base64_decode($_GET["funcion"])=="editar") {
               
                    echo '<li class="nav-item active"><a class="nav-link"  href="nav.php?id='.$_GET["id"].'&funcion='.$_GET["funcion"].'"><strong>Home <span class="sr-only">(current)</span></strong></a></li>

                            <li class="nav-item"><a class="nav-link"  href="formulario-restaurante-edit.php?id='.$_GET["id"].'&funcion='.$_GET["funcion"].'"><strong>Editar</strong></a> </li>';
              
                }if (base64_decode($_GET["funcion"])=="insertar") {

                        echo '<li class="nav-item active"><a class="nav-link"  href="nav.php?id='.$_GET["id"].'&funcion='.$_GET["funcion"].'"><strong>Home <span class="sr-only">(current)</span></strong></a></li>

                              <li class="nav-item"><a class="nav-link"  href="formulario-restaurante.php?id='.$_GET["id"].'&funcion='.$_GET["funcion"].'"><strong>Registrar</strong></a></li>';
                                }

include 'script-backend.php';
 ?>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-primary my-2 my-sm-0" href="../Models/session_destroy.php"> 
        <img src="img/salir.svg" width="30" height="30" title="Salir"></a>
    </form>
  </div>
</nav>






