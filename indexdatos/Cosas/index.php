<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="dudas";
$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Datos</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<br>

	<table border="5" align="center" bgcolor="white" width="70%">
		<tr>
			<td>Nombre</td>
			<td>Correo</td>
			<td>Duda</td>
		</tr>

		<?php
		$sql="SELECT * from formulario";
		$result=mysqli_query($enlace,$sql);
		while($mostrar=mysqli_fetch_array($result)){
	  ?>
		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['duda'] ?></td>
		</tr>
	<?php
	}
	 ?>
	</table>

</body>
</html>
