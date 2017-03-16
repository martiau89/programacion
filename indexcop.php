<!DOCTYPE html>
<html>

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


<form action="index.php" method="post">
	<input type="text" name="nombre" placeholder="escribe tu nombre">
	<br>
	<input type="submit" value="enviar">

</form>

</body>
</html>
