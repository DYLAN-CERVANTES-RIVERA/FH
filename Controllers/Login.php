<?php 
	class Login extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function login()
		{
			$data['tag_page'] = "LOGIN | ".COMPANY;
			$this->views->getView($this,"login",$data);
		}


		public function validar()
		{
			if(empty($_POST['usuario']) || empty($_POST['pass'])){
				$msg = "Los campos estan vacios";
			}else{
				$usuario = strClean($_POST['usuario']);
				$pass=strClean($_POST['pass']); 
				$data =$this->model->iniciarSesion($usuario,$pass);
				if($data == '1'){
					$msg = "ok";
				}else{
					$msg = "Usuario o Contraseña Incorrecta";
				}
			}
			echo json_encode($msg, JSON_UNESCAPED_UNICODE);
			die();
		}


		public function salir()
		{	
			$data =$this->model->salirSesion();
			session_unset();
			session_destroy();
			header("Location: ".base_url()."");
			exit();
		}

		

	}
 ?>