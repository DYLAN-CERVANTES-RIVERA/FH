<?php 

	class loginModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		
		public function iniciarSesion(string $usuario, string $pass)
		{
			/*
			Ejemplo
			$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$pass' AND  estatus='1'";
			$request= $this->select($sql);
			return $request;

			--------------------------------------------------------
			para insertar o actualizar:
			$sql = "INSERT INTO fiscalia (CDI,Tramite) VALUES(?,?)";
			$sql = "UPDATE fiscalia SET CDI=?,Tramite=? WHERE Id=?"
			
			Se crea un arreglo

			$datos = array(
					$this->CDI=$data['cdi'],
					$this->Tramite=$data['tramite'],
					$this->Id=$data['id']
			);

			Y despues se llama a la funcion deseada '$sql= $this->funcion';
			las funciones estan en LIBRARIES\CORE\Mysql.php
				- insert($sql, $datos);
				- select($sql);
				- select_all($sql)
				- update($sql, $datos);
				- delete($sql)  --> Por lo regular no se ocupa ya que se hacen borrados logicos es decir actualizamos un estatus
			
		
			*/
			return 1;
		}

		public function salirSesion()
		{
			//acciiones
			
		}

	}
?>