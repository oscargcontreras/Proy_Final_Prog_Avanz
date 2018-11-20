<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){
		if($enlaces == "registroDependencia" || $enlaces == "registroProceso" || $enlaces == "registroAuto" ||  $enlaces == "administrarDependencia"  || $enlaces == "administrarProceso" || $enlaces == "administrarAuto" ||    $enlaces =="consultaDependencia" || $enlaces == "consultaTiempo"
	        || $enlaces == "modificarDependencia"){

			$module =  "views/modules/".$enlaces.".php";
		}
		else if($enlaces == "index"){
			$module =  "views/modules/mensaje.php";
		}
		return $module;
	}

}

?>