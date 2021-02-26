<?php
    
    include 'style-backend.php';
    include 'meta.php';
     if(!empty($_POST)){
    
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $seccion=$_POST['seccion'];
    header("Location: ../Controllers/controller_login.php?seccion=".$seccion."&email=".$email."&contraseña=".$contraseña."&recordar=".$recordar);
} 

?>

    <title>Log | Gastronomico</title>

  </head>

  <body class="text-center text-primary"> 
   <div id="particles-js"></div>


    <form  enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="form-signin bg-light">
      <input type='hidden' name='seccion' value='seccion'>
 <h1 class="h1 mb-3 font-weight-normal fon-fromulario">Gastronomia</h1>
  <h1 class="h3 mb-3 font-weight-normal text-secondary">Login</h1>

  <div class="mb-3">
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" style="height:40px"><i class="fa fa-user"></i> </span>
      </div>
      <input type="email" class="form-control fon-parrafo " id="username" name="email" 
      placeholder="example@gmail.com"  style="height:40px" required autofocus>
    </div>
  </div>


<div class="mb-3">
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" style="height:40px"><i class="fa fa-lock"> </i></span>
      </div>
      <input type="password" class="form-control fon-parrafo " id="inputPassword" name="contraseña"
       placeholder="Ingrese Contraseña"  style="height:40px" required>
    </div>
  </div>

<br>

  <button class="btn btn-lg btn-primary btn-block fon-parrafo" type="submit"> 
    <a  style="font-size:16;  color:white; text-decoration:none">
      Ingresar</a></button>
  
<a  style="font-size:16;" class="btn fon-parrafo" data-toggle="modal" data-target="#exampleModal">
 Se te olvidó tú contraseña 
</a>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fon-parrafo" id="exampleModalLabel">Se te olvidó tú contraseña </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body fon-parrafo">
        Para recuperar su contraseña acercate a la oficina de Sub Gerencia de informatica..!!! 
              </div>

    </div>
  </div>
</div>




  <p class="mt-3 mb-3 text-muted">Copyright © 2020 Muni Castilla</p>
</form>
 
        <?php include 'script-backend.php' ?>
  
</body>
</html>