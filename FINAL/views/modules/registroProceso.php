<br><br><br><br><br><br>
<h1>REGISTRO DE PROCESO DE CALIDAD</h1>

<form method="post">
	
	<input type="text" placeholder="Numero de resolucion" name="numberResolution" required><br>

	<label>Fecha de la resolución</label><input type="date" name="dateResolution" required><br>

	<input type="text" placeholder="Vigencia(Años)" name="validity" required><br>

    <label>Fecha vencimiento</label><br><input type="date" name="dateExpiration" required><br>

	<label>Tipo de proceso</label><br>

	<input type="radio" name="typeprocess" value="calificado"><label>Calificado</label>

	<input type="radio" name="typeprocess" value="acreditacion"><label>Acreditación</label><br><br>

	<input type="submit" value="Enviar">

</form>

<?php

$registroProcesoCalidad = new MvcController();
$registroProcesoCalidad -> registroProcesoController();

?>