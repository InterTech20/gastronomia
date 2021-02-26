<?php 

	require_once('../Config/connection.php');
	require_once('platos.php');
  require_once('funciones.php');
  
 
	class CrudPlatos{
		 function __construct(){}

		 function insertar($platos){
     

      $db=Db::conectar();
      $select=$db->prepare("SELECT * FROM info_restaurante WHERE nombre='".$platos->getRestaurante()."'");
      $select->execute();
      $registro=$select->fetch();

      $inserts=$db->prepare("INSERT INTO info_platos VALUES (NULL,
              '".imagen($platos->getCabe1(),1)."','".imagen($platos->getCabe2(),1)."','".imagen($platos->getCabe3(),1)."','".$platos->getP_nombre1()."','".
              imagen($platos->getP_img1(),2)."','".$platos->getP_des1()."','".$platos->getP_nombre2()."','".imagen($platos->getP_img2(),2)."','".$platos->getP_des2()."','".$platos->getP_nombre3()."','".imagen($platos->getP_img3(),2)."','".$platos->getP_des3()."','".$platos->getP_nombre4()."','".imagen($platos->getP_img4(),2)."','".$platos->getP_des4()."','".$platos->getP_nombre5()."','".imagen($platos->getP_img5(),2)."','".$platos->getP_des5()."','".$platos->getP_nombre6()."','".imagen($platos->getP_img6(),2)."','".$platos->getP_des6()."','".$registro["id"]."')");
			
		    $inserts->execute();	

		}

		 function obtenerPlatos($id_restaurante){
			$db=Db::conectar();
			$select=$db->prepare("SELECT info_platos.*,info_restaurante.* FROM info_platos,info_restaurante where 
			info_platos.id_restaurante=".$id_restaurante." AND info_restaurante.id=".$id_restaurante."");

			$select->execute();

			while($row = $select->fetch()) {
							 echo '<header style="background-image: url(images/cabecera/'.$row["cabe1"].');">
                              <div class="textos fon-nombre">
                                  <h1 class="titulo "> Bienvenido a '.$row["nombre"].'</h1>
                                  
                              </div>
                              <div class="sesgoabajo"></div>
                          </header>


                      <div class="container fon-p mt-5">
                          <hr class="featurette-divider">

                          <div class="row featurette">
                            <div class="col-md-7 order-md-2 ">
                            
                              <p class="lead mt-5">Te brindamos un lugar agradable, acogedor , una buena infraestructura, los platos a la carta son delicioso para degustar... </p>
                            </div>

                            <div class="col-md-5 order-md-1">

                              <img src="images/cabecera/'.$row["cabe2"].'" width="500" height="500" class="figure-img img-fluid rounded zoom"/>
                            </div>
                          </div>


                          <div class="row featurette">
                            <div class="col-md-7">
                            
                              <p class="lead mt-5">Atencion amable, comodo lugar para  degustar los platos 
                              y pasar un buen momento para compartir con la familia o amistades.</p>
                            </div>
                            <div class="col-md-5 ">

                              <img src="images/cabecera/'.$row["cabe3"].'" width="500" height="500" class="figure-img img-fluid rounded zoom"/>
                            </div>
                          </div>
                      <hr class="featurette-divider">
                      </div>


                      <div class="container text-center mt-5 ">
                      	<h1 class="fon-nombre">'.$row["nombre"].'</h1>

                      	<p class="fon-p">
                      La gastronomía piurana es una de las más valoradas por sus sabrosos platos típicos y sabores inigualables ,
                      esta riqueza gastronómica se debe a la mezcla de sus insumos que proviene de los cultivos costeños</p>
                      <br>	
                      </div>

                              
                              <div class="container ">

                                <div class="row">
                              
                      <div class="wrap col-md-4 ">
                          <div class="tarjeta-wrap">
                            <div class="tarjeta">
                              <img src="images/platos/'.$row["p_img1"].'"  class="adelante card-img"/>
                              <div class="atras font-text">
                                <p class="font-text">'.$row["p_nombre1"].'</br>
                                '.$row["p_des1"].'</p>
                              </div>
                            </div>
                          </div>
                          </div>

                      <div class="wrap col-md-4">
                          <div class="tarjeta-wrap">
                            <div class="tarjeta">
                              <img src="images/platos/'.$row["p_img2"].'"  class="adelante card-img"/>
                              <div class="atras">
                                <p class="font-text">'.$row["p_nombre2"].'</br>
                                '.$row["p_des2"].'</p>
                              </div>
                            </div>
                          </div>
                          </div>

                      <div class="wrap col-md-4">
                          <div class="tarjeta-wrap">
                            <div class="tarjeta">
                              <img src="images/platos/'.$row["p_img3"].'"  class="adelante card-img"/>
                              <div class="atras">
                                <p class="font-text">'.$row["p_nombre3"].'</br>
                                '.$row["p_des3"].'</p>
                              </div>
                            </div>
                          </div>
                          </div>

                          <div class="wrap col-md-4">
                          <div class="tarjeta-wrap">
                            <div class="tarjeta">
                              <img src="images/platos/'.$row["p_img4"].'"  class="adelante card-img"/>
                              <div class="atras">
                                <p class="font-text">'.$row["p_nombre4"].'</br>
                                '.$row["p_des4"].'</p>
                              </div>
                            </div>
                          </div>
                          </div>

                          <div class="wrap col-md-4">
                          <div class="tarjeta-wrap">
                            <div class="tarjeta">
                              <img src="images/platos/'.$row["p_img5"].'"  class="adelante card-img"/>
                              <div class="atras">
                                <p class="font-text">'.$row["p_nombre5"].'</br>
                                '.$row["p_des5"].'</p>
                              </div>
                            </div>
                          </div>
                          </div>

                      <div class="wrap col-md-4">
                          <div class="tarjeta-wrap">
                            <div class="tarjeta">
                              <img src="images/platos/'.$row["p_img6"].'"  class="adelante card-img"/>
                              <div class="atras">
                                <p class="font-text">'.$row["p_nombre6"].'</br>
                                '.$row["p_des6"].'</p>
                              </div>
                            </div>
                          </div>
                          </div>

                            </div>

                          </div>


                      <footer class="page-footer font-small" style="background-color: #212121;">
                  
                        <div class="container text-center text-md-left mt-2 text-light">

                          <div class="row mt-3">

                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                              <h6 class="text-uppercase font-weight-bold font-footer"><img src="img/home.png" width="30" height="30" class="fas fa-home mr-3">'.$row["nombre"].'</h6>
                              <p class="font-footer">Le Recomendamos que venga a degustar de
                              nuestros platos ¡Esperamos verte pronto!</p>

                            </div>

                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-light">

                              <h6 class="text-uppercase font-weight-bold font-footer">Contáctanos</h6>
                              <p class="font-footer">
                                <img src="img/address.png" width="30" height="30" class="fas fa-home mr-3 ">'.$row["direccion"].'</p>
                              <p class="font-footer">
                                <img src="img/envelope.png" width="30" height="30" class="fas fa-envelope mr-3">'.$row["email"].'</p>
                              <p class="font-footer">
                                <img src="img/phone.png" width="30" height="30" class="fas fa-phone mr-3 "> +51 '.$row["telefono"].'</p>
                            </div>

                          </div>

                        </div>

                        <div class="footer-copyright text-center py-3 text-light font-footer" >Copyright © 2020 Municipalidad de Castilla - Piura Todos Los Derechos reservados 
                        </div>

                      </footer>';
				 break;
			}

	
		}

        function select($id_restaurante){
      
                  $db=Db::conectar();
                  $select=$db->prepare("SELECT info_platos.*,info_restaurante.id_user FROM info_platos,info_restaurante where id_user=".$id_restaurante." AND info_platos.id_restaurante=info_restaurante.id");
                  $select->execute();
            while ($registro=$select->fetch()) {
echo "<form enctype='multipart/form-data'  id='form' action='../Controllers/controller_platos.php' method='POST'>
                      <input type='hidden' name='update' value='update'>
                      <input type='hidden' name='restaurante' value='".$id_restaurante."'>
        <div class='album py-2  fon-parrafo'>
                <div class='container'>
                  <div class='row'>
                    <div class='col-md-4'>
                      <div class='card mb-4 shadow'>
                        <img id='list1' class='figure-img img-fluid rounded' src='images/cabecera/".$registro["cabe1"]."'/>
                   
                <input type='file' class='form-control' id='cabe1' name='cabe1' onchange="."preview_image('list1')"." accept='image/*'>
                        <div class='card-body'>
                          <p class='card-text'>Foto de Portada 1</p>

                        </div>
                      </div>
                    </div>
                   
                    <div class='col-md-4'>
                      <div class='card mb-4 shadow'>
                        <img id='list2' class='figure-img img-fluid rounded'  src='images/cabecera/".$registro["cabe2"]."' />
                                 
                        
                   <input type='file' class='form-control' id='cabe2' name='cabe2'  accept='image/*'  onchange="."preview_image('list2')"." >
                        <div class='card-body'>
                          <p class='card-text fon-parrafo'>Foto de Portada 2</p>

                        </div>
                      </div>
                    </div>


                    <div class='col-md-4'>
                      <div class='card mb-4 shadow'>  
                      <img id='list3' class='figure-img img-fluid rounded' src='images/cabecera/".$registro["cabe3"]."'/>
                   
                   <input type='file' class='form-control' id='cabe3' name='cabe3'  accept='image/*' onchange="."preview_image('list3')"." >
                        <div class='card-body'>
                          <p class='card-text'>Foto de Portada 3</p>

                        </div>
                      </div>
                    </div>


                    <div class='col-md-4'>
                      <div class='card mb-4 shadow'>
                   <img id='list4' class='figure-img img-fluid rounded'  src='images/platos/".$registro["p_img1"]."'/>
              
                   <input type='file' class='form-control'  id='p_img1' name='p_img1' placeholder='Ingrese Foto de Portada del Local'
                    accept='image/*' onchange="."preview_image('list4')"." >
                        <div class='card-body'>
                      <div class='form-group'>
            <label for='exampleInputEmail1'>Nombre</label>
            <input type='text' class='form-control'  id='p_nombre1' name='p_nombre1' value='".$registro["p_nombre1"]."'  placeholder='Ingrese Nombre del Plato' required>
          </div>

              <div class='form-group'>
            <label for='exampleInputEmail1'>Descripcion</label>
            <textarea class='form-control'  id='p_des1' name='p_des1' required>
            ".$registro["p_des1"]."
              </textarea>
              </div>

                


                        </div>
                      </div>
                    </div>


                    <div class='col-md-4'>
                      <div class='card mb-4 shadow'>
                        <img id='list5' class='figure-img img-fluid rounded' src='images/platos/".$registro["p_img2"]."'/>
                   <input type='file' class='form-control' id='p_img2' name='p_img2' accept='image/*'  onchange="."preview_image('list5')"." >
                        <div class='card-body'>
                      <div class='form-group'>
            <label for='exampleInputEmail1'>Nombre</label>
            <input type='text' class='form-control' id='p_nombre2' name='p_nombre2' value='".$registro["p_nombre2"]."'  placeholder='Ingrese Nombre del Plato' required>
          </div>
              <div class='form-group'>
            <label for='exampleInputEmail1'>Descripcion</label>
            <textarea class='form-control' id='p_des2' name='p_des2' required>
            ".$registro["p_des2"]."
              </textarea>
              </div>

                        
                        </div>
                      </div>
                    </div>


                    <div class='col-md-4'>
                      <div class='card mb-4 shadow'>
                        <img id='list6' class='figure-img img-fluid rounded' src='images/platos/".$registro["p_img3"]."' />
                   <input type='file' class='form-control' id='p_img3' name='p_img3' accept='image/*' onchange="."preview_image('list6')"." >
                        <div class='card-body'>
                      <div class='form-group'>
            <label for='exampleInputEmail1'>Nombre</label>
            <input type='text' class='form-control' id='p_nombre3' name='p_nombre3'  value='".$registro["p_nombre3"]."' placeholder='Ingrese Nombre del Plato' required>
          </div>

              <div class='form-group'>
            <label for='exampleInputEmail1'>Descripcion</label>
            <textarea class='form-control' id='p_des3' name='p_des3' required >
            ".$registro["p_des3"]."
              </textarea>
              </div>
                          
                        </div>
                      </div>
                    </div>


                    <div class='col-md-4'>
                      <div class='card mb-4 shadow'>
                        <img id='list7' class='figure-img img-fluid rounded' src='images/platos/".$registro["p_img4"]."' />
                
                   <input type='file' class='form-control' id='p_img4' name='p_img4'  accept='image/*' onchange="."preview_image('list7')".">
                        <div class='card-body'>
                      <div class='form-group'>
            <label for='exampleInputEmail1'>Nombre</label>
            <input type='text' class='form-control' id='p_nombre4' name='p_nombre4'  value='".$registro["p_nombre4"]."'  placeholder='Ingrese Nombre del Plato' required>
          </div>
              <div class='form-group'>
            <label for='exampleInputEmail1'>Descripcion</label>
            <textarea class='form-control' id='p_des4'  name='p_des4' required>
            ".$registro["p_des4"]."
              </textarea>
              </div>

                        </div>
                      </div>
                    </div>


                                <div class='col-md-4'>
                      <div class='card mb-4 shadow'>
                        <img id='list8' class='figure-img img-fluid rounded' src='images/platos/".$registro["p_img5"]."'/>
                   
                   <input type='file' class='form-control' id='p_img5' name='p_img5'  
                   accept='image/*' onchange="."preview_image('list8')"." >
                        <div class='card-body'>
                      <div class='form-group'>
            <label for='exampleInputEmail1'>Nombre</label>
            <input type='text' class='form-control' id='p_nombre5' name='p_nombre5' value='".$registro["p_nombre5"]."'  placeholder='Ingrese Nombre del Plato' required>
          </div>
              <div class='form-group'>
            <label for='exampleInputEmail1'>Descripcion</label>
            <textarea class='form-control'  id='p_des5' name='p_des5' required>
            ".$registro["p_des5"]."
              </textarea>
              </div>
                        
                        </div>
                      </div>
                    </div>


                                <div class='col-md-4'>
                      <div class='card mb-4 shadow'>
                        <img id='list9' class='figure-img img-fluid rounded' src='images/platos/".$registro["p_img6"]."'/>

                   <input type='file' class='form-control' id='p_img6' name='p_img6'  
                   accept='image/*' onchange="."preview_image('list9')"." >
                        <div class='card-body'>
                      <div class='form-group'>
            <label for='exampleInputEmail1'>Nombre</label>
            <input type='text' class='form-control' id='p_nombre6' name='p_nombre6' value='".$registro["p_nombre6"]."'  placeholder='Ingrese Nombre del Plato' required>
          </div>
              <div class='form-group'>
            <label for='exampleInputEmail1'>Descripcion</label>
            <textarea class='form-control' id='p_des6' name='p_des6' required>
           ".$registro["p_des6"]."
              </textarea>
              </div>

                 

                        </div>
                      </div>
                    </div>
               <div class='btn-group'>
                          <button type='button' class='btn btn-lg bg-secondary text-white' onclick='habilitar(1);'>Edit</button>
                           <button class='btn btn-primary btn-lg btn-block' type='submit' ><b>Guardar</b></button>
                        </div>
              </form>
         
            </div>
          </div>";
                      break; 
              }

            
             
    }


	 	function update($platos){

              $db=Db::conectar();
              $select=$db->prepare("SELECT id FROM info_restaurante WHERE id_user='".
                            $platos->getRestaurante()."'");
              
              $select->execute();
              $id_restaurante="";


          while ($registro=$select->fetch()) {
             $id_restaurante=$registro['id'];
          }
   if (implode($platos->getCabe1())!=40) {

     $update=$db->prepare("UPDATE info_platos SET   cabe1='".imagen($platos->getCabe1(),1)."',
          p_nombre1='".$platos->getP_nombre1()."', 
          p_des1='".$platos->getP_des1()."', 
          p_nombre2='".$platos->getP_nombre2()."', 
          p_des2='".$platos->getP_des2()."', 
          p_nombre3='".$platos->getP_nombre3()."' ,
          p_des3='".$platos->getP_des3()."', 
          p_nombre4='".$platos->getP_nombre4()."', 
          p_des4='".$platos->getP_des4()."', 
          p_nombre5='".$platos->getP_nombre5()."' , 
          p_des5='".$platos->getP_des5()."',
          p_nombre6='".$platos->getP_nombre6()."' , 
          p_des6='".$platos->getP_des6()."'
          WHERE id_restaurante='".$id_restaurante."'");
         

        }else if (implode($platos->getCabe2())!=40) {

      $update=$db->prepare("UPDATE info_platos SET   cabe2='".imagen($platos->getCabe2(),1)."',
              p_nombre1='".$platos->getP_nombre1()."', 
              p_des1='".$platos->getP_des1()."', 
              p_nombre2='".$platos->getP_nombre2()."', 
              p_des2='".$platos->getP_des2()."', 
              p_nombre3='".$platos->getP_nombre3()."' ,
              p_des3='".$platos->getP_des3()."', 
              p_nombre4='".$platos->getP_nombre4()."', 
              p_des4='".$platos->getP_des4()."', 
              p_nombre5='".$platos->getP_nombre5()."' , 
              p_des5='".$platos->getP_des5()."',
              p_nombre6='".$platos->getP_nombre6()."' , 
              p_des6='".$platos->getP_des6()."'
              WHERE id_restaurante='".$id_restaurante."'");

        }else if (implode($platos->getCabe3())!=40) {

        $update=$db->prepare("UPDATE info_platos SET   cabe3='".imagen($platos->getCabe3(),1)."',
          p_nombre1='".$platos->getP_nombre1()."', 
          p_des1='".$platos->getP_des1()."', 
          p_nombre2='".$platos->getP_nombre2()."', 
          p_des2='".$platos->getP_des2()."', 
          p_nombre3='".$platos->getP_nombre3()."' ,
          p_des3='".$platos->getP_des3()."', 
          p_nombre4='".$platos->getP_nombre4()."', 
          p_des4='".$platos->getP_des4()."', 
          p_nombre5='".$platos->getP_nombre5()."' , 
          p_des5='".$platos->getP_des5()."',
          p_nombre6='".$platos->getP_nombre6()."' , 
          p_des6='".$platos->getP_des6()."'
          WHERE id_restaurante='".$id_restaurante."'");

        }else if (implode($platos->getP_img1())!=40) {

          $update=$db->prepare("UPDATE info_platos SET p_nombre1='".$platos->getP_nombre1()."', p_img1='".imagen($platos->getP_img1(),2)."',
          p_des1='".$platos->getP_des1()."', 
          p_nombre2='".$platos->getP_nombre2()."', 
          p_des2='".$platos->getP_des2()."', 
          p_nombre3='".$platos->getP_nombre3()."' ,
          p_des3='".$platos->getP_des3()."', 
          p_nombre4='".$platos->getP_nombre4()."', 
          p_des4='".$platos->getP_des4()."', 
          p_nombre5='".$platos->getP_nombre5()."' , 
          p_des5='".$platos->getP_des5()."',
          p_nombre6='".$platos->getP_nombre6()."' , 
          p_des6='".$platos->getP_des6()."'
          WHERE id_restaurante='".$id_restaurante."'");


        }else if (implode($platos->getP_img2())!=40) {
         
         $update=$db->prepare("UPDATE info_platos SET p_nombre1='".$platos->getP_nombre1()."', 
          p_des1='".$platos->getP_des1()."', 
          p_nombre2='".$platos->getP_nombre2()."', p_img2='".imagen($platos->getP_img2(),2)."', 
          p_des2='".$platos->getP_des2()."', 
          p_nombre3='".$platos->getP_nombre3()."' ,
          p_des3='".$platos->getP_des3()."', 
          p_nombre4='".$platos->getP_nombre4()."', 
          p_des4='".$platos->getP_des4()."', 
          p_nombre5='".$platos->getP_nombre5()."' , 
          p_des5='".$platos->getP_des5()."',
          p_nombre6='".$platos->getP_nombre6()."' , 
          p_des6='".$platos->getP_des6()."'
          WHERE id_restaurante='".$id_restaurante."'");

        }else if (implode($platos->getP_img3())!=40) {

         $update=$db->prepare("UPDATE info_platos SET p_nombre1='".$platos->getP_nombre1()."', 
          p_des1='".$platos->getP_des1()."', 
          p_nombre2='".$platos->getP_nombre2()."', 
          p_des2='".$platos->getP_des2()."', 
          p_nombre3='".$platos->getP_nombre3()."' ,p_img3='".imagen($platos->getP_img3(),2)."', 
          p_des3='".$platos->getP_des3()."', 
          p_nombre4='".$platos->getP_nombre4()."', 
          p_des4='".$platos->getP_des4()."', 
          p_nombre5='".$platos->getP_nombre5()."' , 
          p_des5='".$platos->getP_des5()."',
          p_nombre6='".$platos->getP_nombre6()."' , 
          p_des6='".$platos->getP_des6()."'
          WHERE id_restaurante='".$id_restaurante."'");

        }else if (implode($platos->getP_img4())!=40) {

           $update=$db->prepare("UPDATE info_platos SET p_nombre1='".$platos->getP_nombre1()."', 
            p_des1='".$platos->getP_des1()."', 
            p_nombre2='".$platos->getP_nombre2()."', 
            p_des2='".$platos->getP_des2()."', 
            p_nombre3='".$platos->getP_nombre3()."' , 
            p_des3='".$platos->getP_des3()."', 
            p_nombre4='".$platos->getP_nombre4()."', p_img4='".imagen($platos->getP_img4(),2)."',
            p_des4='".$platos->getP_des4()."', 
            p_nombre5='".$platos->getP_nombre5()."' , 
            p_des5='".$platos->getP_des5()."',
            p_nombre6='".$platos->getP_nombre6()."' , 
            p_des6='".$platos->getP_des6()."'
            WHERE id_restaurante='".$id_restaurante."'");

        }else if (implode($platos->getP_img5())!=40) {

            $update=$db->prepare("UPDATE info_platos SET p_nombre1='".$platos->getP_nombre1()."', 
                p_des1='".$platos->getP_des1()."', 
                p_nombre2='".$platos->getP_nombre2()."', 
                p_des2='".$platos->getP_des2()."', 
                p_nombre3='".$platos->getP_nombre3()."' , 
               p_des3='".$platos->getP_des3()."', 
               p_nombre4='".$platos->getP_nombre4()."', 
               p_des4='".$platos->getP_des4()."', 
               p_nombre5='".$platos->getP_nombre5()."' ,  p_img5='".imagen($platos->getP_img5(),2)."',
               p_des5='".$platos->getP_des5()."',
                p_nombre6='".$platos->getP_nombre6()."' , 
                p_des6='".$platos->getP_des6()."'
                WHERE id_restaurante='".$id_restaurante."'");

        }else if (implode($platos->getP_img6())!=40) {
         
              $update=$db->prepare("UPDATE info_platos SET p_nombre1='".$platos->getP_nombre1()."', 
                p_des1='".$platos->getP_des1()."', 
                p_nombre2='".$platos->getP_nombre2()."', 
                p_des2='".$platos->getP_des2()."', 
                p_nombre3='".$platos->getP_nombre3()."' , 
               p_des3='".$platos->getP_des3()."', 
               p_nombre4='".$platos->getP_nombre4()."', 
               p_des4='".$platos->getP_des4()."', 
               p_nombre5='".$platos->getP_nombre5()."' , 
               p_des5='".$platos->getP_des5()."',
               p_nombre6='".$platos->getP_nombre6()."' , p_img6='".imagen($platos->getP_img6(),2)."', 
               p_des6='".$platos->getP_des6()."'
                WHERE id_restaurante='".$id_restaurante."'");
        }else{

           $update=$db->prepare("UPDATE info_platos SET p_nombre1='".$platos->getP_nombre1()."', 
                p_des1='".$platos->getP_des1()."', 
                p_nombre2='".$platos->getP_nombre2()."', 
                p_des2='".$platos->getP_des2()."', 
                p_nombre3='".$platos->getP_nombre3()."' , 
                p_des3='".$platos->getP_des3()."', 
                p_nombre4='".$platos->getP_nombre4()."', 
                p_des4='".$platos->getP_des4()."', 
                p_nombre5='".$platos->getP_nombre5()."' , 
                p_des5='".$platos->getP_des5()."',
                p_nombre6='".$platos->getP_nombre6()."' ,  
                p_des6='".$platos->getP_des6()."'
                WHERE id_restaurante='".$id_restaurante."'");
        }

 
     

        $update->execute();

         
      		}

		

	}
?>