<?php 

class Restaurante{

		private $id;
		private $nombre;
		private $direccion;
		private $email;
		private $telefono;
		private $horario;
		private $delivery;
		private $foto;
		private $id_user;

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

		public function getDireccion(){
			return $this->direccion;
		}

		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}
		
		public function getTelefono(){
			return $this->telefono;
		}

		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getHorario(){
			return $this->horario;
		}

		public function setHorario($horario){
			$this->horario = $horario;
		}
		public function getDelivery(){
			return $this->delivery;
		}

		public function setDelivery($delivery){
			$this->delivery = $delivery;
		}
		public function getFoto(){
			return $this->foto;
		}

		public function setFoto($foto){
			$this->foto = $foto;
		}

		public function getId_user(){
			return $this->id_user;
		}

		public function setId_user($id_user){
			$this->id_user = $id_user;
		}
	}


?>
