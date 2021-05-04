<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="humedad.css">
	<title>humedad</title>
</head>
<body>
	<h1>Sensor de Humedad</h1>
	<div class="list-c">
		<div class="img"><img src="logosena.png" style="width: 150px; height: 150px;"></div>
		<ul>
			<li><a href="regadera.php">Centro de Regaderas</a></li>
			<li><a href="humedad.php">Sensor de Humedad</a></li>
			<li><a href="temperatura.php">Sensor de Temperatura</a></li>
			<li><a href="movimiento.php">Movimiento de agua</a></li>
		</ul>
		<p>Centro de operaciones</p>
	</div>
				<form name="formulario" role="form" method="post">
					<div class="conta-form">
						<strong class="lgris">Ingrese ID del sensor</strong>
						<br><br>
						<div class="form-row">
							<div class="form-group">
								<input class="form-control" type="number" name="numid" autofocus value="" placeholder="ID">
							</div>
							<div class="form-group col-md-3">
								<input class="btn" type="submit" value="Consultar">
							</div>
						</div>
						<br>
					</div>
					<div id="divconsulta2">
					<h3>Nivel de humedad:</h3>
				<?php 
				if ($_SERVER['REQUEST_METHOD']==='POST') 
				{
					include 'funciones.php';
					$vnumid=$_POST['numid'];
					$miconexion=conectar_bd('root', 'proyecto');
					$resultado=consulta($miconexion,"select * from humedad where trim(id) like '%{$vnumid}%'");
					if ($resultado->num_rows>0) 
					{
						while ($fila = $resultado->fetch_object()) 
						{
							echo $fila->grados;
						}
					}
					else
					{
						echo "No existen registros";
					}
					$miconexion->close();
				}
				 ?>
			</div>
				</form>
</body>
</html>