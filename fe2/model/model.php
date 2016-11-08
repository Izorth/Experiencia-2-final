<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php 

if(!empty($_POST)){

	//print "<script>alert(\"Datos correctamente llenados.\");window.location='./model.php';</script>"

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$sexo = $_POST['sexo'];
	$fecha = $_POST['fecha'];
	$email = $_POST['email'];
	$color = $_POST['color'];

 echo'<h1>Datos ingresados correctamente</h1>';

 	echo '<div class="form-group">';
 	echo '<label  class="control-label col-sm-7"> Nombre:'; echo $nombre; echo'</label>';
 	echo '</div>';
 	echo '<div class="form-group">';
 	echo '<label  class="control-label col-sm-7"> Apellido:'; echo $apellido; echo'</label>';
 	echo '</div>';
 	echo '<div class="form-group">';
 	echo '<label  class="control-label col-sm-7"> Sexo:'; echo $sexo; echo'</label>';
 	echo '</div>';
 	echo '<div class="form-group">';
 	echo '<label  class="control-label col-sm-7"> Fecha:'; echo $fecha; echo'</label>';
 	echo '</div>';
 	echo '<div class="form-group">';
 	echo '<label  class="control-label col-sm-7"> Email:'; echo $email; echo'</label>';
 	echo '</div>';
 	 	echo '<div class="form-group">';
 	echo '<label  class="control-label col-sm-7"> Color:'; echo $color; echo'</label>';
 	echo '</div>';




}


?>