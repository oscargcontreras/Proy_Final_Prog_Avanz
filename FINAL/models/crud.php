<?php

require_once "conexion.php";

class Datos extends Conexion{

    public function registroDependenciaModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (name, acronym, type, active) VALUES (:name,:acronym,:type,:active)");	

		#bindParam() Vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.

		$stmt->bindParam(":name", $datosModel["name"], PDO::PARAM_STR);
		$stmt->bindParam(":acronym", $datosModel["acronym"], PDO::PARAM_STR);
		$stmt->bindParam(":type", $datosModel["type"], PDO::PARAM_STR);
		$stmt->bindParam(":active", $datosModel["active"], PDO::PARAM_BOOL);

		if($stmt->execute()){
			return "success";
		}
		else{
			return "error";
		}

		$stmt->close();

	}

	public function vistaAutoModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id,name,acronym,type,active FROM $tabla ");	
		$stmt->execute();

		#fetchAll(): Obtiene todas las filas de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetchAll();

		$stmt->close();

	}

	public function modificarDependenciaModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT id, name, acronym, type, active FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);	
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}

	public function actualizarDependenciaModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, acronym = :acronym, type = :type, active = :active WHERE id = :id");

		$stmt->bindParam(":name", $datosModel["name"], PDO::PARAM_STR);
		$stmt->bindParam(":acronym", $datosModel["acronym"], PDO::PARAM_STR);
		$stmt->bindParam(":type", $datosModel["type"], PDO::PARAM_STR);
		$stmt->bindParam(":active", $datosModel["active"], PDO::PARAM_BOOL);
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}

}	

?>