
<?php 
$dni = htmlentities($_POST['dni']);

error_reporting(0);

$url = "https://dniruc.apisperu.com/api/v1/dni/".$dni."?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im1heG1jbV92aXBAaG90bWFpbC5jb20ifQ.0xkHI_pPqS2CA3bK0UldWZqzjfp26jJHr7GQuJGahlU";

$jsonpractica=file_get_contents($url);

$datos=json_decode($jsonpractica);

$dni=$datos->{'dni'};
$nombres=$datos->{'nombres'};
$apellidoPaterno=$datos->{'apellidoMaterno'};
if ($nombres) {
	
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
		<form action="registrar.php" method="POST">
		<div>
		<input type="text" value="<?php echo $dni ?>" name="txtDni">
		<input type="text" value="<?php echo $nombres ?>" name="txtNombre">
		
		</div>
		<button type="submit">Registrar</button>
		</form>
	</body>
	</html>
	<?php
}else{
	echo "No existe datos del DNI ingresado.";
}
 
	
	

 ?>