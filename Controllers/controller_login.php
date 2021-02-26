<?php 
	require_once('../Models/usuario.php');
	require_once('../Models/crud_usuario.php');
	require_once('../Models/funciones.php');
		$usuario =new Usuario();
		$crud=new CrudUsuario();
try {
	if (isset($_POST['registrarse'])) {

			$usuario->setNombre($_POST['nombre']);
			$usuario->setEmail($_POST['email']);
			$usuario->setContraseña($_POST['contraseña']);

			if ($crud->buscarEmail($usuario->getEmail())) {
					$crud->insertar($usuario);
					header('Location: ../Views/login.php');
			}else{
					header('Location: ../Views/404error.php?mensaje=El E-mail del usuario ya existe');
				}	
		
	}else if (isset($_GET['seccion'])) { 
	$usuario=$crud->obtenerUsuario(htmlentities(addslashes($_GET['email'])),htmlentities(addslashes($_GET['contraseña'])));

		if ($usuario->getEmail()!=NULL) {
			
		sessioniniciar($usuario->getEmail());

			if ($usuario->getEmail()=="root@adminstrador.com") {
				header('Location: ../Views/nav.php?id='.base64_encode($usuario->getId())."&funcion=".base64_encode("admin"));
			}else if ($crud->verficiar($usuario->getEmail())) {
			
				header('Location: ../Views/nav.php?id='.base64_encode($usuario->getId())."&funcion=".base64_encode("editar"));

							}else{
					
				header('Location: ../Views/nav.php?id='.base64_encode($usuario->getId())."&funcion=".base64_encode("insertar"));
						}
							

		}else{

			header('Location: ../Views/login.php?mensaje=Tu E-mail  o clave son incorrectos');
		}

	}else if (isset($_POST['password'])) {
	
				$crud->password($_POST['email'],$_POST['contraseña']);
				header('Location: ../Views/nav.php?id='.$_POST['id']."&funcion=".base64_encode("admin"));
	}else{
		header('Location: ../Views/404error.php');
	}
	
} catch (Exception $e) {
	    header('Location: ../Views/404error.php?error=Fatal');
}
	
?>