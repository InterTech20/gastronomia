<?php 

	require_once('../Models/platos.php');
	require_once('../Models/crud_platos.php');
	require_once('../Models/funciones.php');

	$platos=new Platos();
	$crud=new CrudPlatos();
try {
		if (isset($_POST['registrar'])) {
	sessionstar();
		$platos->setCabe1($_FILES['cabe1']);
		$platos->setCabe2($_FILES['cabe2']);
		$platos->setCabe3($_FILES['cabe3']);

		$platos->setP_nombre1($_POST['p_nombre1']);
		$platos->setP_img1($_FILES['p_img1']);
		$platos->setP_des1($_POST['p_des1']);

		$platos->setP_nombre2($_POST['p_nombre2']);
		$platos->setP_img2($_FILES['p_img2']);
		$platos->setP_des2($_POST['p_des2']);

		$platos->setP_nombre3($_POST['p_nombre3']);
		$platos->setP_img3($_FILES['p_img3']);
		$platos->setP_des3($_POST['p_des3']);

		$platos->setP_nombre4($_POST['p_nombre4']);
		$platos->setP_img4($_FILES['p_img4']);
		$platos->setP_des4($_POST['p_des4']);

		$platos->setP_nombre5($_POST['p_nombre5']);
		$platos->setP_img5($_FILES['p_img5']);
		$platos->setP_des5($_POST['p_des5']);

		$platos->setP_nombre6($_POST['p_nombre6']);
		$platos->setP_img6($_FILES['p_img6']);
		$platos->setP_des6($_POST['p_des6']);

		$platos->setRestaurante($_POST['restaurante']);
		
			$crud->insertar($platos);

		header('Location: ../Views/nav.php?id='.$_POST['id_user'].'&funcion='.base64_encode("editar"));	
		
	}else if (isset($_POST['update'])) { 


		
		$platos->setCabe1($_FILES['cabe1']);
		$platos->setCabe2($_FILES['cabe2']);
		$platos->setCabe3($_FILES['cabe3']);

		$platos->setP_nombre1($_POST['p_nombre1']);
		$platos->setP_img1($_FILES['p_img1']);
		$platos->setP_des1($_POST['p_des1']);

		$platos->setP_nombre2($_POST['p_nombre2']);
		$platos->setP_img2($_FILES['p_img2']);
		$platos->setP_des2($_POST['p_des2']);

		$platos->setP_nombre3($_POST['p_nombre3']);
		$platos->setP_img3($_FILES['p_img3']);
		$platos->setP_des3($_POST['p_des3']);

		$platos->setP_nombre4($_POST['p_nombre4']);
		$platos->setP_img4($_FILES['p_img4']);
		$platos->setP_des4($_POST['p_des4']);

		$platos->setP_nombre5($_POST['p_nombre5']);
		$platos->setP_img5($_FILES['p_img5']);
		$platos->setP_des5($_POST['p_des5']);

		$platos->setP_nombre6($_POST['p_nombre6']);
		$platos->setP_img6($_FILES['p_img6']);
		$platos->setP_des6($_POST['p_des6']);

		$platos->setRestaurante($_POST['restaurante']);
		
		$crud->update($platos);
header('Location: ../Views/formulario-platos-edit.php?id='.base64_encode($_POST['restaurante']).'&funcion='.base64_encode("editar"));
	}else{
		header('Location: ../Views/404error.php');
	}

} catch (Exception $e) {

		header('Location: ../Views/404error.php?error');
}
	
?>