<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect('localhost','root','',3306) or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db('studio_aledi',$link) or die("<h2>Error de Conexion</h2>");
    
	//obtenemos los valores del formulario
	$nombre = $_POST['nombre'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	

	//Obtiene la longitudes
	//$req = (strlen($nombre)*strlen($fecha)*strlen($hora)) or die("No se han llenado todos los campos");



	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO cliente VALUES('','$nombre','$fecha','$hora')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="cita.html";
		</script>
	'
?>