<?php 

	class Inicio extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function inicio()
		{
			/** 
			 * Para que regrese a una vista desde el controlador
			 * esta vista debe de estar en una carpeta que en Views y debe
			 * de tener el mismo nombre que la clase.
			 * 
			 * La otra forma seria hacerlo desde javascript
			 * como se hace en el login o en el menu
			 **/
			$data['tag_page'] = "Inicio ~ ".COMPANY;
			$this->views->getView($this,"index",$data);
		}

		

	}
 ?>