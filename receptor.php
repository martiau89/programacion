<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>

	<?php
	$nombre= $_POST['dato1'];
	$apellido= $_POST['dato2'];

	if($nombre=="" || $apellido==""){
		echo "hey escribe tu nombre";
	} else {

		if($nombre=="Albert" && $apellido=="Carles"){
			echo "ya esta tu nombre";
		} else {
			echo "hola " .$nombre." ".$apellido;
		}
	}
	?>

	<?php
	$edad = 26;
	echo "jhon tiene" .$edad. "años";

	$nombres =["albert", "Ramon","Maria", "Jose", "penelope", "anna"];

	$productos =[["iphone", "Apple","900"],
	 						["galaxy", "samsung", "1200"],
							["htz","htc", "500"]];

		echo $nombres[3];


	?>

</body>

</html>
