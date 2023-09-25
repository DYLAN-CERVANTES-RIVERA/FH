<?php 
	
	class Views
	{
		function getView($controller,$view,$data="")
		{
			$controller = get_class($controller);
			//if($controller == "Home" || $controller == "Login" ){
			if($controller == "Login"){
				$view = "Views/".$view.".php";
				require_once ($view);
			}elseif(file_exists("Views/".$controller."/".$view.".php")){
				$view = "Views/".$controller."/".$view.".php";
				require_once ($view);
			}else{
				$view = "Views/Errors/error.php";
				require_once ($view);
			}
			
		}
	}

 ?>