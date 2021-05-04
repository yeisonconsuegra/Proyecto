<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
</head>
<body style="background-image: url(point.jpg); background-size: 100%; object-fit: cover;">
	
<?php
include 'funciones.php';
$vid=$_POST['id'];
$vtipoid=$_POST['edad'];
$vnombres=$_POST['nombre'];
$vapellidos=$_POST['apellido'];
$vcorreo=$_POST['correo'];
$vcontraseña=$_POST['contraseña'];

$miconexion=conectar_bd('root', 'proyecto');
$resultado=consulta($miconexion,"insert into usuarios
	(usua_id,edad,nombre,apellido,correo_usua,cont_usua) 
	values
	('{$vid}','{$vtipoid}','{$vnombres}','{$vapellidos}','{$vcorreo}','{$vcontraseña}')");

if ($resultado) 
{
	echo "<center><h2>Registro exitoso con exito</h2></center>";	
}
  ?>

</body>
</html>