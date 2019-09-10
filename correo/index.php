<!DOCTYPE html>
<html>
<head>
	<title>enviar correo prueba 3</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<form action="" method="post">
		<input type="text" placeholder="name" required="">
		<input type="email" placeholder="email" required="">
		<input type="text" placeholder="asunto" required="">
		<textarea name="msg" placeholder="mensaje"></textarea>
		<input type="submit" name="enviar">
	</form>
<?php 

 ?>

<?php 

include("correo.php");

 ?>
</body>
</html>