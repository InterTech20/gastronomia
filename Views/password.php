<?php include 'meta.php' ?>
   </head>
    <title>Cambiar Contraseña</title>    
<body >
<?php include 'nav.php'; ?>


<div class="container mt-5 mb-3 ">
<article class="mx-auto " style="max-width: 400px;">
	<h4 class="mt-3 text-center fon-fromulario text-white">Cambiar Contraseña</h4>

	<form enctype="multipart/form-data" action="../Controllers/controller_login.php"  method="POST" class="form-signin">
     <input name="password" type="hidden" value="password">
	
<input name="id" type="hidden" value="<?php echo $_GET['id'] ?>"> 
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
        <input name="contraseña" id="pass1" class="form-control" placeholder="Nueva Contraseña" type="password" required>
    </div> 


    <div class="form-group">
        <button  class="btn btn-primary btn-block"> Cambiar</button>
    </div> 
                                                                 
</form>
</article>
 
</div> 
       
        <?php include 'script-backend.php' ?>
</body>
</html>
