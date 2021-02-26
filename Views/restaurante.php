<?php include 'meta.php' ?>
<?php include 'style-frontend.php' ?>
<title>Restaurante</title>
 </head>
<body style="background-color: white;">

<div class="sticky-container">
    <ul class="sticky">
        <li>
           <div class="fb-page" data-href="https://www.facebook.com/InteraccionTecnologica/" data-width="380" 
  data-hide-cover="false" data-show-facepile="false"></div>
        </li>
    </ul>
</div>

<?php 
    require_once('../Models/platos.php');
      require_once('../Models/crud_platos.php');

   
    $platos=new Platos();
    $crud=new CrudPlatos();
  
    if (isset($_GET['id'])) { 

    $platos=$crud->obtenerPlatos(base64_decode($_GET['id']));  
  
  }


 ?>
 
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v6.0&appId=364053637331289&autoLogAppEvents=1"></script>

<a id="back2Top" class="text-center" title="Subir" href="#">&#10148;</a>
  <?php include 'script-frontend.php' ?>
</body>
</html>
