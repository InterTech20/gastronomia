<?php include 'meta.php'; ?>
	<title>Formulario | Platos | Editar</title>
</head>

  <body  onload="from_edit(1);">
    <?php include 'nav.php'; ?>
    <div class="container">
  <div class="py-3 text-center">
    <br>    
    <h2 class="fon-fromulario text-white">Editar Platos del Restaurante</h2>
  </div>
  <div class="float-left position-static rounded-circle btn btn-light" style="float:right;">  
    <a href="formulario-restaurante-edit.php?id=<?php echo "".$_GET['id'];?>&funcion=<?php echo "".$_GET['funcion'];?>" title="Atras">
  <img src="img/chevron-izquierdo.svg" height="30" width="20">
        </a>
</div>

<?php 
      require_once('../Models/crud_platos.php');

          $crud=new CrudPlatos();
         
          if (isset($_GET['id'])) {

            $crud->select(base64_decode($_GET['id']));

        }
 ?>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1 text-white">Copyright © 2020 Municipalidad de Castilla - Piura Todos Los Derechos reservados</p>
    
  </footer>
</div>

   <?php include 'script-backend.php' ?>  

</body>
</html>
