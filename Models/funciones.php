<?php 

function imagen($file,$dir){
    $_FILES["img"]=$file;
 
    if ($dir==0) {
      if (is_dir("../Views/images/") && is_uploaded_file($_FILES['img']['tmp_name'])){
        if ( (strpos($_FILES['img']['type'], "jpeg")) || (strpos($_FILES['img']['type'], "jpg")) ){
            if (move_uploaded_file($_FILES['img']['tmp_name'], "../Views/images" . '/' . $_FILES['img']['name']))
            {
                return $_FILES['img']['name'];
            }
        }
    }
    }
    
    if ($dir==1) {
      if (is_dir("../Views/images/cabecera/") && is_uploaded_file($_FILES['img']['tmp_name'])){
        if ((strpos($_FILES['img']['type'], "jpeg")) || (strpos($_FILES['img']['type'], "jpg")) ){
            if (move_uploaded_file($_FILES['img']['tmp_name'], "../Views/images/cabecera" . '/' . $_FILES['img']['name'])){
                return $_FILES['img']['name'];
            }
        }
    }
    }


    if ($dir==2) {
          if (is_dir("../Views/images/platos/") && is_uploaded_file($_FILES['img']['tmp_name'])){
            if ( (strpos($_FILES['img']['type'], "jpeg")) || (strpos($_FILES['img']['type'], "jpg")) ){
                if (move_uploaded_file($_FILES['img']['tmp_name'], "../Views/images/platos" . '/' . $_FILES['img']['name']))
                {
                    return $_FILES['img']['name'];
                }
            }
        }
        }

   header("Location: ../Views/404error.php?mensaje=error al subir archivos");
}

      function sessioniniciar($email){
	       session_start();
            $_SESSION['email']=$email;
      }

        function sessionstar(){
	         session_start(); 
            if (!isset($_SESSION['email'])) {
             header("Location: ../Views/login.php");
          }
      }

      function sessionexit(){
	             session_destroy();
                unset($_SESSION['email']);
              header("Location: ../Views/login.php");
      }

 ?>