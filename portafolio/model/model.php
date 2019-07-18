<?php

class Enlacespaginas{

	public function enlacesPaginasModel($enlacesModel){

			if ($enlacesModel == "perfil" || $enlacesModel == "cv" || $enlacesModel == "servicios" || $enlacesModel == "contacto"|| $enlacesModel == "proyectos"){
				$module = "view/modules/".$enlacesModel. ".php";
			return $module;
		}
	}

} 


?>