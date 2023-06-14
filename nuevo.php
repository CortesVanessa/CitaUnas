<?php
session_start();
include_once('../config/dbconect.php');

if(isset($_POST['enviar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO cliente (nombre, fecha,hora) 
		VALUES (:nombre, :fecha, :hora)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':nombre' => $_POST['nombre'] , ':fecha' => $_POST['fecha'] , ':hora' => $_POST['hora']
)) ) ? 'cliente guardado' : 'Algo salió mal. No se puede agregar miembro';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: ../../folder/cita.php');
	
?>