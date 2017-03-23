<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"
</head>

<body>

hola mundo

<hr>

<script type="text/javascript">
	document.write("Hola Mundo")
</script>

<hr>

<?php
$nombre="alejandro";
if(isset($_post['nombre'])){
	$nombre=$_post['nombre'];
}
echo "Hola".$nombre;
?>

<form action="receptor.php" method="post">
	<label>Nombre</label>
	<input type="text" name="dato1"><br>
	<label>Apellido</label>
	<input type="text" name="dato2"><br>
	<input type="submit" value="enviar">
</form>

</body>
</html>
