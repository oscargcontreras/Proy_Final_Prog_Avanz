<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "views/template.php";
	
	}

	public function enlacesPaginasController(){

	if(isset( $_GET['action'])){
		$enlaces = $_GET['action'];
	}
	else{
		$enlaces = "index";
	}
	$respuesta = Paginas::enlacesPaginasModel($enlaces);
	include $respuesta;
	
	}

	public function registroDependenciaController(){
		if(isset($_POST["nameDependence"])){
			$datosController = array( "name"=>$_POST["nameDependence"], 
								      "acronym"=>$_POST["acronymDependence"],
								      "type"=>$_POST["typeDependence"],
			                          "active"=>true);
			$respuesta = Datos::registroDependenciaModel($datosController, "dependence"); 

			if($respuesta == "success"){

				header("location:index.php?action=ok");

			}

			else{

				header("location:index.php");
			}

		} 
	}
	
	public function registroProcesoController(){
	    
	}

	public function registroAutoController(){
	    
	}

	public function vistaAutoController(){

		$respuesta = Datos::vistaAutoModel("dependence");

		#El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["name"].'</td>
				<td>'.$item["acronym"].'</td>
				<td>'.$item["type"].'</td>
				<td>'.$item["active"].'</td>
				<td><a href="index.php?action=modificarDependencia&id='.$item["id"].'"><button>Editar</button></a></td>
			</tr>';

		}

	}

	public function modificarDependenciaController(){

		$datosController = $_GET["id"];
		$respuesta = Datos::modificarDependenciaModel($datosController, "dependence");

		echo'<input type="hidden" value="'.$respuesta["id"].'" name="id">

		     <input type="text" value="'.$respuesta["name"].'" name="name" required>

			 <input type="text" value="'.$respuesta["acronym"].'" name="acronym" required>

			 <input type="text" value="'.$respuesta["type"].'" name="type" required>

			 <label>Activo</label>

			 <input type="text" value="'.$respuesta["active"].'" name="active" required>

			 <input type="submit" value="Actualizar">';

	}

	#------------------------------------
	public function actualizarDependenciaController(){

		if(isset($_POST["name"])){

			$datosController = array( "id"=>$_POST["id"],
				                      "name"=>$_POST["name"],
							          "acronym"=>$_POST["acronym"],
				                      "type"=>$_POST["type"],
				                      "active"=>$_POST["active"]);
			
			$respuesta = Datos::actualizarDependenciaModel($datosController, "dependence");

			if($respuesta == "success"){

				header("location:index.php?action=cambio");

			}

			else{

				echo "error";

			}

		}
	
	}
}

?>