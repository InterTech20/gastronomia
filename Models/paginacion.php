  <main role="main">
      <div class="album py-5 ">
        <div class="container">

          <div class="row">

<?php 

      require_once('../Config/connection.php');
           $db=DB::conectar();
                $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
          
          if($action == 'ajax'){
            include 'pagination.php'; 
                   $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
                    $per_page = 9; 
                    $adjacents  = 4; 
                    $offset = ($page - 1) * $per_page;

                    $numrows="";
                    $count_query  = $db->prepare("SELECT count(*) AS id FROM info_restaurante");
                    $count_query->execute();
                    while ($row= $count_query->fetch()) {$numrows = $row['id'];}
                    
                    $total_pages = ceil($numrows/$per_page);
                    $reload = 'index.php';

                $select =$db->prepare("SELECT * FROM info_restaurante  order by nombre LIMIT $offset,$per_page");
                $select->execute();
        
        if ($numrows>0){

                      while($row =$select->fetch()) {
                        echo '<div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                        <img class="card-img-top " src="images/'.$row["foto"].'" width="200" height="200" alt="Card image cap">
                        <div class="card-body"><p class="card-text font-text"><b class="text-center">'.$row["nombre"].'</b><br>
                        Horario De Atencion&nbsp;'. $row["horario"].'<br>Se Realiza Delivery&nbsp;'. $row["delivery"].'</p>
                        <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group"> 
                                      <a class="btn btn-primary font-text" href="restaurante.php?id='.base64_encode($row["id"]).'">Ver</a>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>';
                    }
  
        }

       echo'<div class="font-text">'.paginate($reload, $page, $total_pages, $adjacents).'</div>';
    

    } else {
      
      echo'<div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>';
    
    }

 ?>

             </div>
                </div>
              </div>
    </main>
