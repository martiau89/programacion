<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>


	<?php
	$nombre= $_POST['dato1'];
	$apellido= $_POST['dato2'];

	if($nombre=="Albert" && $apellido=="Carles"){
		echo "ya esta tu nombre";
	} else {
		echo "hola " .$nombre." ".$apellido;
	}
	?>

</body>
</html>
