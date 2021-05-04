<?php 

$bd_host = "localhost";   
$bd_nombre = "prueba";        
$bd_usuario = "root";        
$bd_contra = "root";         

$conexion=mysqli_connect("localhost","root","root","prueba");

if(mysqli_connect_errno()){

	echo "No fue posible conectarse a las base de datos";

	exit();

 }
 mysqli_select_db($conexion, $bd_nombre) or die ("No se encuentra la BBDD"); 

 mysqli_set_charset($conexion, "utf8");   

 $consulta="select * from usuarios";
 $resultado = mysqli_query($conexion, $consulta); 
 $fila = mysqli_fetch_row($resultado);
 $i=1;

while($i<=3){

$fila = mysql_fetch_row($resultado); 
 echo $fila[0];
 echo $fila[1];
 echo $fila[2];
 echo $fila[3];
 echo "<br>";
 $i++;
}
mysqli_close($conexion);  
 ?>
