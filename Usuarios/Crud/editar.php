<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Cathay</title>
  <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
  <link href="../../css/bootstrap.min.css" rel="stylesheet"/>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="../../Js/live.js"></script><!-- Live refresh CSS, HTML and JS in browser. -->

</head>
<body>
<header class="Registro">
    <h2 class="TituloIndex">Editar Usuario</h2>
  </header>
<!--Editar Datos-->
<?php 
include_once("../../Conexion/conexion.php");


if (isset($_GET['editar'])) {
  $editar_id = $_GET['editar'];

  $consulta = "SELECT * FROM usuarios where id_usuario='$editar_id'";
  $ejecutar = mysqli_query($connect,$consulta);

  $fila = mysqli_fetch_array($ejecutar);

  $idUsuario = $fila['id_usuario'];
  $nombre = $fila['nombre'];
  $apellido = $fila['apellido'];
  $tipoDocumento = $fila['tipo_documento'];
  $numeroDocumento = $fila['numero_documento'];
  $correo = $fila['correo'];
  $password = $fila['password'];
  $telCelular = $fila['tel_celular'];
  $direccion = $fila['direccion'];
}
?>

<form class="Formu" method="POST" id="editar">
      <!--Campos De La BD-->
  <div class="form-group">
    <label for="Nombre">Ingresa Tu Nombre</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required="required" value="<?php echo $nombre; ?>" />
  </div>
  <div class="form-group">
    <label for="Apellido">Ingresa Tu Apellido</label>
    <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido" required="required" value="<?php echo $apellido; ?>" />
  </div>
  <div class="form-group">
    <label for="TipoDocumento">Tipo Documento</label>
    <input class="form-control" type="text" id="TipoDocumento" name="TipoDocumento" readonly="readonly" value="<?php echo $tipoDocumento; ?>" />
  </div>
  <div class="form-group">
    <label for="NumeroDocumento">Numero Documento</label>
    <input type="number" class="form-control" id="NumeroDocumento" name="NumeroDocumento" readonly="readonly" placeholder="Numero Documento" required="required" value="<?php echo $numeroDocumento; ?>" />
  </div>
  <div class="form-group">
    <label for="Correo">Correo</label>
    <input type="email" class="form-control" id="Correo" name="Email" placeholder="Email" required="required" value="<?php echo $correo; ?>" />
  </div>
  <div class="form-group">
    <label for="Pass">Password</label>
    <input type="password" class="form-control" id="Pass" name="Pass" placeholder="Password" required="required" value="<?php echo $password; ?>" />
  </div>
  <div class="form-group">
    <label for="TelCelular">Tel Celular</label>
    <input type="number" class="form-control" id="TelCelular" name="TelCelular" placeholder="Ingrese Su Celular" required="required" value="<?php echo $telCelular; ?>" />
  </div>
  <div class="form-group">
    <label for="Direccion">Dirección</label>
    <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion" required="required" value="<?php echo $direccion; ?>" />
  </div>
    <a href="ver.php"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></a>
    <button type="submit" name="update" value="ACTUALIZAR DATOS" class="btn btn-primary">Editar</button>
</form>

<?php 
if (isset($_POST['update'])) {

    $actualizar_nombre = $_POST['Nombre'];
    $actualizar_apellido = $_POST['Apellido'];
    $actualizar_tipoDocumento = $_POST['TipoDocumento'];
    $actualizar_numeroDocumento = $_POST['NumeroDocumento'];
    $actualizar_correo = $_POST['Email'];
    $actualizar_password = $_POST['Pass'];
    $actualizar_telCelular = $_POST['TelCelular'];
    $actualizar_direccion = $_POST['Direccion'];

    $actualizar = "UPDATE usuarios SET nombre='$actualizar_nombre', apellido='$actualizar_apellido', tipo_documento='$actualizar_tipoDocumento', numero_documento='$actualizar_numeroDocumento', correo='$actualizar_correo', password='$actualizar_password', tel_celular='$actualizar_telCelular', direccion='$actualizar_direccion' 
      WHERE id_usuario='$editar_id'";
    $ejecutar = mysqli_query($connect,$actualizar);
   if($ejecutar){
     ?>
      <script>
        alert('El Usuario Ha Sido Actualizado');
        window.location.href='ver.php';
      </script>
    <?php
}
}
?>
</body>
</html>