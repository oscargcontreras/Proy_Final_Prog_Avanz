<br><br><br><br><br><br>
<h1>REGISTRO DE PROCESO DE AUTOEVALUACION</h1>

<form method="post">

	
	
	<label>Fecha de la autoevaluación</label><input type="date" name="dateAuto" required>

    <label>Fecha de la próxima autoevaluación</label><input type="date" name="dateProxAuto" required><br>

	<input type="submit" value="Enviar">

</form>

<?php

$registroAuto = new MvcController();
$registroAuto -> registroAutoController();

?>