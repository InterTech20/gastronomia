<?php include 'nav.php' ?>

    <div class="container ">
  <div class=" text-center">
    <h2 class="fon-fromulario text-white">Registro de Porta del Restaurante</h2>
 
  </div>

  <form enctype="multipart/form-data"  id="form" action="../Controllers/controller_restaurante.php" method="POST">
  
  <input type='hidden' name='registrar' value='registrar'>
  <input name="id" type="hidden" value="<?php echo "".$_GET['id'];?>">
    <main role="main ">
      <div class="album   ">
    <div class="container h-100">

      <div class="row justify-content-center h-100">
        <div class="col-md-4 align-self-center">
          <div class="card mb-4 shadow">
            <img id="image" />
           <output id="thumbnail">
            <svg class="bd-placeholder-img card-img-top fon-parrafo" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Logo del Local</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
           </output>
           <input type="file" class="form-control "  name='foto' placeholder="Ingrese Foto de Portada del Local" accept="image/*"  onchange="preview_image('image')"  required>

            <div class="card-body">
              <div class="form-group fon-parrafo">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name='nombre' placeholder="Ingrese Nombre del Restaurant" required>
  </div>

      <div class="form-group fon-parrafo">
    <label for="exampleInputEmail1 ">Direccion</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name='direccion' placeholder="Ingrese Direccion del Restaurant" required>
      </div>

          <div class="form-group fon-parrafo">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name='telefono' placeholder="Ingrese Telefono del Restaurant" required>
  </div>

              <div class="form-group fon-parrafo">
    <label for="exampleInputEmail1">E-Mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name='email' placeholder="Ingrese email del Restaurant" required>
  </div>

<div class="form-group fon-parrafo">
    <label for="exampleFormControlSelect1">Horario</label>
    <select class="form-control" id="exampleFormControlSelect1" name='horario' required>
      <option>9:00 - 16:00</option>
      <option>10:00 - 16:00</option>
      <option>10:00 - 18:00</option>
    </select>
  </div>


<div class="form-group fon-parrafo">
    <label for="exampleInputEmail1">Delivery</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name='delivery' id="exampleRadios1" value="SI">
  <label class="form-check-label" for="exampleRadios1">
    Si
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name='delivery' id="exampleRadios2" value="NO">
  <label class="form-check-label" for="exampleRadios2">
    No
  </label>
</div>
</div>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group fon-parrafo">
               
                   <button class="btn btn-primary btn-sm btn-block" type="submit" ><b>Guardar</b></button>
                </div>
               
              </div>
            </div>
          </div>
        </div>
          </div>
        </div>
      </form>  
          </main>

    </div>
  </div>

  <footer class="my-5 text-muted text-center text-small">
    <p class="mb-1 text-white">Copyright © 2020 Municipalidad de Castilla - Piura Todos Los Derechos reservados</p>
    
  </footer>
</div>
      <?php include 'script-backend.php' ?> 

</body>
</html>

