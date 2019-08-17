<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Cathay</title>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="../Js/live.js"></script><!-- Live refresh CSS, HTML and JS in browser. -->
</head>
<body>
<header class="Registro">
    <h2 class="TituloIndex">Registro Cathay</h2>
</header>

<form class="Formu" method="POST" action="formulario.php" id="formulario">
      <!--Campos De La BD-->
  <div class="form-group">
    <label for="Nombre">Ingresa Tu Nombre</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required="required"/>
  </div>
  <div class="form-group">
    <label for="Apellido">Ingresa Tu Apellido</label>
    <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido" required="required"/>
  </div>
  <div class="form-group">
    <label for="TipoDocumento">Tipo Documento</label>
      <select class="Option" id="TipoDocumento" name="TipoDocumento" required="required">
        <option value="Cedula">Cedula</option>
        <option value="TarjetaIdentidad">Tarjeta Identidad</option>
        <option value="Nit">Nit</option>
      </select>
  </div>
  <div class="form-group">
    <label for="NumeroDocumento">Numero Documento</label>
    <input type="number" class="form-control" id="NumeroDocumento" name="NumeroDocumento" placeholder="Numero Documento" required="required"/>
  </div>
  <div class="form-group">
    <label for="Correo">Correo</label>
    <input type="email" class="form-control" id="Correo" name="Email" placeholder="Email" required="required"/>
  </div>
  <div class="form-group">
    <label for="Pass">Password</label>
    <input type="password" class="form-control" id="Pass" name="Pass" placeholder="Password" required="required"/>
  </div>
  <div class="form-group">
    <label for="TelCelular">Tel / Celular</label>
    <input type="number" class="form-control" id="TelCelular" name="TelCelular" placeholder="Ingrese Su Celular" required="required"/>
  </div>
  <div class="form-group">
    <label for="Direccion">Dirección</label>
    <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direccion" required="required"/>
  </div>
    <a href="../index.php"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></a>
    <button type="submit" name="insert" value="INSERTAR DATOS" class="btn btn-primary">Guardar</button>
</form>

<?php 
include_once("../Conexion/conexion.php");
//Guardar Datos
if (isset($_POST['insert'])) {
	$nombre = $_POST['Nombre'];
	$apellido = $_POST['Apellido'];
	$tipoDocumento = $_POST['TipoDocumento'];
	$numeroDocumento = $_POST['NumeroDocumento'];
	$correo = $_POST['Email'];
	$password = $_POST['Pass'];
	$telCelular = $_POST['TelCelular'];
	$direccion = $_POST['Direccion'];

  //Busca Si Ya Existe
  $buscar = "SELECT * FROM usuarios WHERE email = '".$Email."'"; 
  $resultado = $connect ->$buscar;
  $fila = mysqli_num_rows($resultado);


  if ($fila ==0) {//Si no Existe Haga...
    $insertar = "INSERT INTO usuarios (nombre,apellido,tipo_documento,numero_documento,correo,password,tel_celular,direccion) VALUES ('$nombre','$apellido','$tipoDocumento','$numeroDocumento','$correo','$password','$telCelular','$direccion')";
  $ejecutar = mysqli_query($connect,$insertar);
  if ($ejecutar) {
    ?>
      <script>
        alert('Te Has Registrado Exitosamente En El Restaurante Cathay');
        window.location.href='../index.php';//Ruta a donde voy a ser redireccionado.
      </script>
    <?php
    }else{
      echo "<script language='JavaScript'>alert('Tu Correo'+' $correo'+' Ya Existe');</script>"

     ?>
      <script>
        window.location.href='formulario.php';//Ruta a donde voy a ser redireccionado.
      </script>
    <?php
    }
  }
}
?>
</body>
</html>