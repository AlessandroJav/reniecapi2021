<?php 
include("conexion.php");

	if(strlen($_POST['txtDni'])>=1 && strlen($_POST['txtNombre'])>=1){
		$nombre=trim( $_POST['txtDni']);
		$apellido=trim( $_POST['txtNombre']);
		$consulta="INSERT INTO Persona(DNI,nombre) VALUES('$nombre','$apellido')";
		$resultado=mysqli_query($con,$consulta);
		
        ?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="estilos.css">
			<title>Document</title>
		</head>
		<body>
		<video src="back.mp4" autoplay="" muted="" loop="" class="video"></video>
		<div class="centro">
			<h1 class="confirmacion">Registro Correcto</h1>
		</div>
		</body>
		</html>
		<?php
	}

?>