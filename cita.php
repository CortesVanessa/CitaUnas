<!DOCTYPE html>
<html lang="en"  dir="ltr">
  
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="style.css">

  <title>Agenda de Citas</title>
  
  <script>
   
// Función para validar el formulario antes de enviarlo
function validarFormulario() {
// Obtener los valores de los campos del formulario
var nombre = document.getElementById("nombre").value;
var fecha = document.getElementById("fecha").value;
var hora = document.getElementById("hora").value;

// Validar que se hayan llenado todos los campos
if (nombre === "" || fecha === "" || hora === "") {
alert("Por favor complete todos los campos del formulario.");
return false;
}
 


alert("Formulario enviado correctamente.");

}

//agregar mascota a la lista
            
function agregarMascota() {
//var tipo = document.querySelector('input[name="opciones"]:checked').value;
var nombre = document.getElementById("nombre").value;
var fecha = document.getElementById("fecha").value;
var hora= document.getElementById("hora").value;

var fila = "<tr><td>" + nombre + "</td><td>" + fecha + "</td><td>" + hora+ "</td><td>";

document.getElementById("mascotas").innerHTML += fila;
}


</script>    




</head>
<body>
<?php

//learn from w3schools.com
//Unset all the server side variables

//import database
include("connection.php");


if ($_POST) {

    $result = $database->query("select * from cliente");

    //obtenemos los valores del formulario
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$database->query("insert into cliente(nombre,fecha,hora) VALUES('$nombre','$fecha','$hora')") ;
header('Location: cliente/index.php');
}
?>
 <div class="v">
  <h1>Agenda Tu Cita Neni</h1> 
</div>
  <div class="inilogin">
    <a href="index.html"> <span class="icon, icon-home"></span>inicio</span></a><br>
    <br>
    <a href="catalogo.html"> <span class="icon, icon-images"></span>catalogo</span></a>
   </div>
  <form  action=" " method="POST">
     
    <label for="nombre1">NOMBRE:</label>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="fecha1">FECHA:</label>
    <input type="date" id="fecha" name="fecha" required><br>

    <label for="hora1">HORA:</label>
    <input type="time" id="hora" name="hora" required><br>
    <input type="submit" value="enviar">
    <input type="button" value="Agendar Cita" onclick="agregarMascota()">
    
  </form>
  
  
</body>




</html>
