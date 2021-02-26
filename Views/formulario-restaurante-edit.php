 <?php include  'nav.php'; ?>
<body  onload="from_edit(0);">

    <input type='hidden' name='actulizar' value='actulizar'>
  <input name="id" type="hidden" value="<?php echo "".base64_decode($_GET['id']);?>">
<br>
    <div class="container ">
  <div class=" text-center">
    <h2 class="fon-fromulario text-white">Editar Porta del Restaurante</h2>
  </div>
<div class="float-right position-static rounded-circle btn btn-light" style="float: left;">
  <a href="formulario-platos-edit.php?id=<?php echo "".$_GET['id'];?>&funcion=<?php echo "".$_GET['funcion'];?>" title="Siguiente">
  <img src="img/chevron-derecho.svg" height="30" width="20">
</a>
</div>

<?php 

          require_once('../Models/restaurante.php');
          require_once('../Models/crud_restaurante.php');
          require_once('../Models/funciones.php');

                $restaurante=new Restaurante();
                  $crud=new CrudRestaurante();

                    $crud->select(base64_decode($_GET['id']));  

 ?>
<div id="particles-js"></div>
  <footer class="my-5 pt-5 text-muted text-center ">
    <p class="mb-1 text-white">Copyright © 2020 Municipalidad de Castilla - Piura Todos Los Derechos reservados</p>
    
  </footer>
</div>
  <?php include 'script-backend.php' ?>  

</body>
</html>

