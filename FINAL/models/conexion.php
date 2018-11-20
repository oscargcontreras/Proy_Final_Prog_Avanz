<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=dbfinal","root","");
		return $link;

	}

}

?>