<?php 

	require_once('../Config/connection.php');
	require_once('restaurante.php');
	require_once('funciones.php');
	
	class CrudRestaurante{

		 function __construct(){}

		 function insertar($restaurante){
			$db=DB::conectar();
			$inserts=$db->prepare("INSERT INTO info_restaurante VALUES(NULL,'".$restaurante->getNombre()."','".$restaurante->getDireccion()."','".$restaurante->getEmail()."','".$restaurante->getTelefono()."','".$restaurante->getHorario()."','".$restaurante->getDelivery()."','".imagen($restaurante->getFoto(),0)."','".$restaurante->getId_user()."')");
		    $inserts->execute();

		}

		 function obtenerRestaurante(){
			$db=Db::conectar();
			$select=$db->prepare("SELECT * FROM info_restaurante ");
			$select->execute();
			$registro=$select->fetch();
		}


		function select($id_user){
		     
		      $db=Db::conectar();
		      $select=$db->prepare("SELECT * FROM info_restaurante where id_user=".$id_user."");
		      $select->execute();

		      while ($registro=$select->fetch()) {
		      	
				 echo '<form enctype="multipart/form-data"  id="form" name="form" action="../Controllers/controller_restaurante.php" method="POST">
				      	  <input type="hidden" name="update" value="update">
		  			<input name="id_user" type="hidden" value='.$registro["id_user"].'>
						    <main role="main ">
						      <div class="album  ">
						    <div class="container h-100">

						      <div class="row justify-content-center h-100">
						        <div class="col-md-4 align-self-center">
						          <div class="card mb-4 shadow">
						            <img id="image"  src="images/'.$registro["foto"].'"/>
						          
						           <input type="file" class="form-control "  id="foto" name="foto" placeholder="Ingrese Foto de Portada del Local" accept="image/*"   onchange="preview_image('."image".')"  >

						            <div class="card-body">
						              <div class="form-group fon-parrafo">
						    <label for="nombre">Nombre</label>
						    <input type="text" class="form-control" id="nombre" value="'.$registro["nombre"].'" name="nombre" placeholder="Ingrese Nombre del Restaurant" required>
						  </div>

						      <div class="form-group fon-parrafo">
						    <label for="direccion ">Direccion</label>
						    <input type="text" class="form-control" id="direccion" value="'.$registro["direccion"].'" name="direccion" placeholder="Ingrese Direccion del Restaurant" required>
						      </div>

						          <div class="form-group fon-parrafo">
						    <label for="telefono">Telefono</label>
						    <input type="text" class="form-control" id="telefono" value="'.$registro["telefono"].'" name="telefono" placeholder="Ingrese Telefono del Restaurant" required>
						  </div>

						              <div class="form-group fon-parrafo">
						    <label for="email">E-Mail</label>
						    <input type="email" class="form-control" id="email" value="'.$registro["email"].'" name="email" placeholder="Ingrese email del Restaurant" required>
						  </div>

						<div class="form-group fon-parrafo">
						    <label for="horario">Horario</label>
						    <select class="form-control" id="horario" value="'.$registro["horario"].'"   name="horario" required>
						      <option>9:00 - 16:00</option>
						      <option>10:00 - 16:00</option>
						      <option>10:00 - 18:00</option>
						    </select>
						  </div>

						<div class="form-group fon-parrafo">
						    <label for="exampleInputEmail1">Delivery</label>
						  <div class="form-check">
						  <input class="form-check-input" type="radio" name="delivery" id="delivery_si" value="'.$registro["delivery"].'">
						  <label class="form-check-label" for="exampleRadios1">
						    Si
						  </label>
						</div>

						<div class="form-check">
						  <input class="form-check-input" type="radio" name="delivery" id="delivery_no" value="'.$registro["delivery"].'">
						  <label class="form-check-label" for="exampleRadios2">
						    No
						  </label>
						</div>
						</div>

						              <div class="d-flex justify-content-between align-items-center">
						                <div class="btn-group fon-parrafo">
						               <button type="button" class="btn btn-sm btn-outline-secondary" onclick="habilitar(0);">Edit</button>
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
						  </div>';
				break;
						       
		      }


		}

	 	function update($restaurante){
			$db=Db::conectar();


			if (implode($restaurante->getFoto())==40) {
				$update=$db->prepare(" UPDATE info_restaurante SET  nombre='".$restaurante->getNombre()."',direccion='".$restaurante->getDireccion()."', email='".$restaurante->getEmail()."',telefono='".$restaurante->getTelefono()."', horario='".$restaurante->getHorario()."', delivery='".$restaurante->getDelivery()."' WHERE id_user='".$restaurante->getId_user()."'");
			}else {
				$update=$db->prepare(" UPDATE info_restaurante SET  nombre='".$restaurante->getNombre()."',direccion='".$restaurante->getDireccion()."', email='".$restaurante->getEmail()."',telefono='".$restaurante->getTelefono()."', horario='".$restaurante->getHorario()."', delivery='".$restaurante->getDelivery()."', foto='".imagen($restaurante->getFoto(),0)."' WHERE id_user='".$restaurante->getId_user()."'");
			}

			$update->execute();
		}


		function buscarRestaurante($nombre){
			$db=Db::conectar();
			$select=$db->prepare("SELECT * FROM info_restaurante WHERE nombre='".$nombre."'");
			$select->execute();
			$registro=$select->fetch();
			
			if($registro['nombre']==$nombre){
				echo '<div class="col-md-4">
      				  <div class="card mb-4 box-shadow">
      				<img class="card-img-top" src="images/'. $registro["foto"].'"width="200" height="200" alt="Card image cap">
      					<div class="card-body">
      					<p class="card-text font-text"><b class="text-center">'. $registro["nombre"].'</b><br>
      					Horario De Atencion&nbsp;'.$registro["horario"].'<br>
      					Se Realiza Delivery &nbsp;'.$registro["delivery"].'</p>
      					<div class="d-flex justify-content-between align-items-center">
              			<div class="btn-group">
                    <a class="btn btn-primary font-text" href="restaurante.php?id='.base64_encode($registro["id"]).'">Ver</a>
                    </div>
                </div>
              </div>
            </div>
          </div>';
			}else{
			echo'<div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>Aviso!!!</h4> No hubo ninguna coincidencia</div>';
			}	
		
		}

	}
?>