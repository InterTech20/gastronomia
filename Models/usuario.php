<?php 
	  class Usuario{

		private $id;
		private $nombre;
		private $email;
		private $contraseña;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}
		public function getContraseña(){
			return $this->contraseña;
		}

		public function setContraseña($contraseña){
			$this->contraseña = $contraseña;
		}
	}
?>