<?php include 'nav.php' ?>
    <div class="container">
  <div class="py-3 text-center">
    <h2 class="fon-fromulario text-white">Registro de Platos del Restaurante</h2>
  </div>

  <form enctype="multipart/form-data" action="../Controllers/controller_platos.php" method="POST">

   <input type='hidden' name='registrar' value='registrar'>
  <input name="restaurante" type="hidden" value="<?php echo "".base64_decode($_GET['restaurante']);?>">
<input name="id_user" type="hidden" value="<?php echo "".$_GET['id'];?>">
<div class="album py-2  fon-parrafo">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow">
                <img id="list1"/>
                 <output id="thumbnail1">
            <svg class="bd-placeholder-img  card-img-top" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Portada del Local</title><rect width="100%" height="100%" fill="#55595c"/>
              <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
           </output>
           <input type="file" class="form-control "  name="cabe1" 
           onchange="preview_image('list1')" accept="image/*" required>
                <div class="card-body">
                  <p class="card-text">Foto de Portada 1</p>
                  
                </div>
              </div>
            </div>
           
           
            <div class="col-md-4">
              <div class="card mb-4 shadow">
                <img id="list2" />
                         <output id="thumbnail2">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Portada del Local</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
           </output>
                
           <input type="file" class="form-control "  name="cabe2"  
           accept="image/*" onchange="preview_image('list2')" required>
                <div class="card-body">
                  <p class="card-text fon-parrafo">Foto de Portada 2</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow">  
              <img id="list3" />
           <output id="thumbnail3">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Portada del Local</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
           </output>
           <input type="file" class="form-control" name="cabe3" 
            accept="image/*" onchange="preview_image('list3')" required>
                <div class="card-body">
                  <p class="card-text">Foto de Portada 3</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow">
           <img id="list4" />
         <output id="thumbnail4">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Platos Mas Consumidos</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
           </output>
           <input type="file" class="form-control"  name="p_img1" placeholder="Ingrese Foto de Portada del Local"
            accept="image/*"  onchange="preview_image('list4')" required>
                <div class="card-body">
              <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control"  name="p_nombre1" placeholder="Ingrese Nombre del Plato" required>
  </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <textarea class="form-control"  name="p_des1" required>
      </textarea>
      </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow">
                <img id="list5" />
         <output id="thumbnail5">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Platos Mas Consumidos</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
           </output>
           <input type="file" class="form-control"  name="p_img2" accept="image/*"  onchange="preview_image('list5')" required>
                <div class="card-body">
              <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control"  name="p_nombre2" placeholder="Ingrese Nombre del Plato" required>
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <textarea class="form-control"  name="p_des2" required>
      </textarea>
      </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow">
                <img id="list6" />
         <output id="thumbnail6">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Platos Mas Consumidos</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
           </output>
           <input type="file" class="form-control" name="p_img3" 
            accept="image/*" onchange="preview_image('list6')" required>
                <div class="card-body">
              <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control"  name="p_nombre3" placeholder="Ingrese Nombre del Plato" required>
  </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <textarea class="form-control"  name="p_des3" required>
      </textarea>
      </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow">
                <img id="list7" />
         <output id="thumbnail7">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Platos Mas Consumidos</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
           </output>
           <input type="file" class="form-control" name="p_img4"  accept="image/*" onchange="preview_image('list7')" required>
                <div class="card-body">
              <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control"  name="p_nombre4" placeholder="Ingrese Nombre del Plato" required>
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <textarea class="form-control"  name="p_des4" required>
      </textarea>
      </div>
                </div>
              </div>
            </div>

                        <div class="col-md-4">
              <div class="card mb-4 shadow">
                <img id="list8" />
         <output id="thumbnail8">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Platos Mas Consumidos</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
           </output>      
           <input type="file" class="form-control"  name="p_img5"  
           accept="image/*" onchange="preview_image('list8')" required>
                <div class="card-body">
              <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="p_nombre5" placeholder="Ingrese Nombre del Plato" required>
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <textarea class="form-control"  name="p_des5" required>
      </textarea>
      </div>
                </div>
              </div>
            </div>


                        <div class="col-md-4">
              <div class="card mb-4 shadow">
                <img id="list9" />
          <output id="thumbnail9">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Platos Mas Consumidos</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
           </output>
           <input type="file" class="form-control "  name="p_img6"  
           accept="image/*" onchange="preview_image('list9')" required>
                <div class="card-body">
              <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control"  name="p_nombre6" placeholder="Ingrese Nombre del Plato" required>
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <textarea class="form-control"  name="p_des6" required>
      </textarea>
      </div>
                </div>
              </div>
            </div>

	
		<hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
      </form>
 
    </div>
  </div>


  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1 text-white">Copyright © 2020 Municipalidad de Castilla - Piura Todos Los Derechos reservados</p>
    
  </footer>
</div>

   <?php include 'script-backend.php' ?>     

</body>
</html>
