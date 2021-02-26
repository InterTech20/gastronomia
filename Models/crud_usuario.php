<?php
 
	require_once('../Config/connection.php');
	require_once('usuario.php');
	require_once('funciones.php');

	class CrudUsuario{

		 function __construct(){}

		 function insertar($usuario){
			$db=DB::conectar();
		      $insert=$db->prepare("INSERT INTO  users VALUES(NULL,'".$usuario->getNombre()."','".$usuario->getEmail()."','".md5($usuario->getContraseña())."')");
		      $insert->execute();
		}

		 function obtenerUsuario($email, $contraseña){
			$db=Db::conectar();
			$select=$db->prepare("SELECT * FROM users WHERE email='".$email."'");
			$select->execute();
			$usuario=new Usuario();
			$registro=$select->fetch();

		if ($registro['contraseña']==md5($contraseña)) {	
				$usuario->setId($registro['id']);
				$usuario->setEmail($registro['email']);
			
			}
			return $usuario;
		}
        
        function  verficiar($email){
        	$db=Db::conectar();
			$select=$db->prepare("SELECT users.id,info_restaurante.id_user FROM users,info_restaurante WHERE users.email='".$email."'");
			$select->execute();
					while ( $registro=$select->fetch()) {					
					if ($registro['id_user']==$registro['id']) {
									$usado=True;			
								}else{	
									$usado=False;
								}	
								return $usado;
					}

		}		

		
		function buscarEmail($email){
			$db=Db::conectar();
			$select=$db->prepare("SELECT * FROM users WHERE email='".$email."'");
			$select->execute();
			$registro=$select->fetch();
			if($registro['email']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}


		function  password($email,$contraseña){
        	$db=Db::conectar();
			$select=$db->prepare("UPDATE users SET contraseña='".md5($contraseña)."' WHERE  email='".$email."'");
			$select->execute();

		}
		
	}

?>