<?php include 'meta.php' ?>
    <title>Crear Nuevo Usuario</title>    
</head>
<body >
<?php include 'nav.php'; ?>

<div class="container mt-5 mb-3 ">
<article class="mx-auto " style="max-width: 400px;">
	<h4 class="mt-3 text-center fon-fromulario text-white">Crear Nuevo Usuario</h4>

	<form enctype="multipart/form-data" action="../Controllers/controller_login.php"  onsubmit="return submitform(this);" id="from" method="POST" class="form-signin">
     <input name="registrarse" type="hidden" value="registrarse">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="nombre" class="form-control" placeholder="Nombre" type="text" required autofocus>
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="correo@gmail.com" type="email" required>
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="contraseña" id="pass1" class="form-control" placeholder="Contraseña" type="password" required>
    </div> 


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input id="pass2" class="form-control" placeholder="Repetir Contraseña" type="password" required>
    </div> 


    <div class="form-group">
        <button  class="btn btn-primary btn-block"> Crear  </button>
    </div> 
                                                                 
</form>
</article>
 
</div> 
                        <script type="text/javascript">
                             function submitform(){

                                    var ok = true;
                             
                                        if ((document.getElementById("pass1").value) == (document.getElementById("pass2").value)) {
                                                    toastr.success("Se Registro");
                                                    ok;
                                        } else {
                                                    toastr.error("error no coinciden");
                                                    ok = false;
                                      }
                                          return ok;
                            }

                        </script>
        <?php include 'script-backend.php' ?>
</body>
</html>