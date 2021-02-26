<?php 
	require_once('../Models/restaurante.php');
	require_once('../Models/crud_restaurante.php');
	require_once('../Models/funciones.php');

	$restaurante=new Restaurante();
	$crud=new CrudRestaurante();

	try {
		if (isset($_POST['registrar'])) {
			
			sessionstar();

		$restaurante->setNombre($_POST['nombre']);
		$restaurante->setDireccion($_POST['direccion']);
		$restaurante->setEmail($_POST['email']);
		$restaurante->setTelefono($_POST['telefono']);
		$restaurante->setHorario($_POST['horario']);
		$restaurante->setDelivery($_POST['delivery']);
		$restaurante->setFoto($_FILES['foto']);
		$restaurante->setId_user(base64_decode($_POST['id']));

		$crud->insertar($restaurante);

		header('Location: ../Views/formulario-platos.php?restaurante='.base64_encode($restaurante->getNombre()).'&funcion='.base64_encode("insertar").'&id='.$_POST['id']);	
		
	}else if (isset($_POST['buscame'])) { 

		$crud->buscarRestaurante($_POST['buscame']);


	}else if (isset($_POST['update'])) { 


		if (empty($_POST['nombre']) && empty($_POST['direccion']) && empty($_POST['email'])  && 
			empty($_POST['telefono']) && empty($_POST['horario']) && empty($_POST['delivery']) &&
			empty($_POST['foto'])) {
		header('Location: ../Views/404error.php?error campos vacíos');	
	
		}else{
			sessionstar();

		$restaurante->setNombre($_POST['nombre']);
		$restaurante->setDireccion($_POST['direccion']);
		$restaurante->setEmail($_POST['email']);
		$restaurante->setTelefono($_POST['telefono']);
		$restaurante->setHorario($_POST['horario']);
		$restaurante->setDelivery($_POST['delivery']);
		$restaurante->setFoto($_FILES['foto']);
		$restaurante->setId_user($_POST['id_user']);
		$crud->update($restaurante);

		header('Location: ../Views/formulario-restaurante-edit.php?id='.base64_encode($_POST['id_user']).'&funcion='.base64_encode("editar"));	
	
		}


			
	}else{
		header('Location: ../Views/404error.php');
	}
	
	} catch (Exception $e) {
		header('Location: ../Views/404error.php?error');
	}
?>