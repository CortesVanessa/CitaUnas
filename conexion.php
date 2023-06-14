<?php
$conexion = mysql_connect('localhost','root','','studio_aledi',3306)
or die(mysql_error($mysqli));

insertar($conexion);


function insertar($conexion){
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$hora =$_POST['hora']; 

$consulta= "INSERT INTO cliente(nombre,fecha,hora) VALUES('$nombre','$fecha','$hora')";
mysqli_query($conexion,$consulta);
mysqli_close($conexion);
}

?>