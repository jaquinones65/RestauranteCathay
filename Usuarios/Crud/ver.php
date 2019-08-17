<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cathay</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../../Js/live.js"></script><!-- Live refresh CSS, HTML and JS in browser. -->

</head>
<body>
<div class="container">
<h3>Usuarios Registrados</h3>	
<table class="table table-striped">
	
<?php 
include_once("../../Conexion/conexion.php");

	$listar = "SELECT * FROM usuarios";

	$ejecutar = mysqli_query($connect,$listar);

	$i=0;

	while ($fila = mysqli_fetch_array($ejecutar)) {
		$idUsuario = $fila['id_usuario'];
		$nombre = $fila['nombre'];
		$apellido = $fila['apellido'];
		$tipoDocumento = $fila['tipo_documento'];
		$numeroDocumento = $fila['numero_documento'];
		$correo = $fila['correo'];
		$password = $fila['password'];
		$telCelular = $fila['tel_celular'];
		$direccion = $fila['direccion'];

		$i++;
?>

	<tr align="center">

		<td><?php echo $idUsuario; ?></td>
		<td><?php echo $nombre; ?></td>
		<td><?php echo $apellido; ?></td>
		<td><?php echo $tipoDocumento; ?></td>
		<td><?php echo $numeroDocumento; ?></td>
		<td><?php echo $correo; ?></td>
		<td><?php echo $password; ?></td>
		<td><?php echo $telCelular; ?></td>
		<td><?php echo $direccion; ?></td>
		<td><a href="editar.php?editar=<?php echo $idUsuario; ?>">Editar</a></td> 
		<td><a href="ver.php?eliminar=<?php echo $idUsuario; ?>">Eliminar</a></td>
	</tr>

<?php } ?>

</table>
<a href="../administrador.php"><button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button></a>
</div>
<?php 
	if (isset($_GET['editar'])) {
		include_once('editar.php');
	}

?>

<?php 
	if (isset($_GET['eliminar'])) {
		$borrar_id = $_GET['eliminar'];

		$eliminar = "DELETE FROM usuarios WHERE id_usuario='$borrar_id'";
		$ejecutar = mysqli_query($connect,$eliminar);
		
	if ($ejecutar) {
      ?>
      <script>
        alert('El Registro A Sido Eliminado');
        window.location.href='ver.php';//Ruta a donde voy a ser redireccionado.
      </script>
    <?php
    }else{
      echo "<script>alert('El Registro No A Sido Eliminado')</script>";
    }
}
?>
</body>
</html>