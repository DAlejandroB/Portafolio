<?php

class Controller{

	public function plantilla (){
		include "view/template.php";
	}
	public function enlacesPaginasControler(){
		if(isset($_GET['action'])){
		$enlacesController = $_GET['action'];
		
		$respuesta = Enlacespaginas::enlacesPaginasModel($enlacesController); 		
		include $respuesta;
		}else{
			include "view/modules/home.php";
		}
	}

}

?>
