<br><br><br><br><br><br>
<h1>REGISTRO DE DEPENDENCIA</h1>

<form method="post">
	
	<input type="text" placeholder="Nombre de dependencia" name="nameDependence" required>

	<input type="text" placeholder="Sigla de dependencia" name="acronymDependence" required><br><br>

	<label>Tipo de dependencia</label><br>

	<input type="radio" name="typeDependence" value="academica"><label>Academica</label>

	<input type="radio" name="typeDependence" value="administrativa"><label>Administrativa</label><br><br>

	<h3>Llene  la siguiente informacion si seleccionó tipo de dependencia: ACADEMICA</h3>

	<label>Seleccione</label><br><br>

	<input type="radio" name="typeAcademical" value="facultad"><label>Facultad</label>

	<input type="radio" name="typeAcademical" value="programa"><label>Programa academico</label><br><br>

	<input type="radio" name="typeAcademical" value="departamento"><label>Departamento</label>

	<input type="submit" value="Enviar">

</form>

<?php

$registroDependencia = new MvcController();
$registroDependencia -> registroDependenciaController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";	
	}

}

?>