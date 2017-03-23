<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>

	<?php
	$edad = 26;
	echo "jhon tiene" .$edad. "años";

	$nombres =["albert", "Ramon","Maria", "Jose", "penelope", "anna"];

	$productos =[["iphone", "Apple","900"],
							["galaxy", "samsung", "1200"],
							["htz","htc", "500"]];

	$iphone =["modelo"=>"iphone", "marca"=>"Apple","precio"=>900];

	$productos2 =[["modelo"=>"iphone", "marca"=>"Apple","precio"=>900],
								["modelo"=>"galaxy","marca"=>"samsung","precio"=> 1200],
								["modelo"=>"htz","marca"=>"google", "precio"=> 500]];

		echo "</p>".$nombres[3]."</p>";
		echo "</p>".$productos[0][2]."</p>";
		echo "</p>".$iphone["precio"]."</p>";
		echo "</p>".$productos2[0]["precio"]."</p>";

		echo "</p>".$productos2[2]["marca"]."</p>";

		echo "</p>".$productos2[0]["modelo"]."</p>";
		echo "</p>".$productos2[0]["marca"]."</p>";
		echo "</p>".$productos2[0]["precio"]."</p>";


		echo "</ul>";
		foreach ($productos2 as $key => $product) {
			echo "<li>".$product["precio"]." ".$product["modelo"]."</li>";
		}
		echo "</ul>";

		//index.html y receptor.php carpeta programacion ejercicio1
		//Hacer un login para la clase que viene
	?>

</body>

</html>
