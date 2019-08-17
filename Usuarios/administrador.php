<?php session_start();

	if(!isset($_SESSION["id_usuario"]) || $_SESSION["id_usuario"]==null){
        print "<script>alert(\"Acceso invalido!\");window.location='../Login/login.php';</script>";
    }/*Este Bloque De Codigo Sirve Para Iniciar La Sessión Ya Antes Programada
     *Además De Que Verifica Si Va A Entrar Por Url Sin El Login, Lo De Vuelve
     *Obligandolo A Iniciar Sessión.
     */
?>
<!-- Creo Las Lista De Formatos Admitidos-->

<?php 

$formatos = array('.jpg','.png','.jpeg','.tiff');
if (isset($_POST['insert'])) {
  $NombreArchivo = $_FILES['Imagen']['name'];
  $NombreTmpArchivo = $_FILES['Imagen']['tmp_name'];
  $ext =  substr($NombreArchivo, strrpos($NombreArchivo, '.'));//Sirve para cortar y extraer lo que haya despues de un .
  if (in_array($ext, $formatos)) {
    if (move_uploaded_file($NombreTmpArchivo, 'C:\xampp\htdocs\Cathay\Platillos\$NombreArchivo')) {
      echo "El Archivo Subio Exitosamente";
    }else{
      echo "No Se Pudo Subir El Archivo";
    }
  }else{
    echo "Por Favor Escoja Una Imagen Valida";
  }
}

?>

<!--Finalizo Lista De Formatos Admitidos-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="../Js/live.js"></script><!-- Live refresh CSS, HTML and JS in browser. -->
    <script src="../Js/fileinput.min.js" type="text/javascript"></script>
</head>
<nav>
	<header class="Registro">
	<h1>Panel De Administración.</h1>
	<a class="LoginCerrar" href="../php/logout.php"><img class="Logout" src="../Fonts/logout.svg">Cerrar Sesion</a>
</header>
</nav>

<body class="BodyAdmin">


<section class="Sector-Admin" id="Sector-Admin">

<hr class="Separador-Vertical"/>
<hr class="Separador-Horizontal"/>


<div class="Panel-Izquierdo">
  <h1 class="Titulo-Panel">Usuarios Visitando La Pagnia.</h1>
  <article>
    <p>
      A continuación se visualizara la cantidad de usuarios que estan actualmente en la pagina, como tambien los que ha ingresado por día y por mes ("Cada mes se reiniciara el conteo.")
    </p>
  <?php 
    include_once("../Visitas.php");
  ?>
  </article>
</div>

<div class="Panel-Derecho">
  <h1 class="Titulo-Panel">Visualizar Pagina.</h1>
    <p>Por medio del siguiente botón se puede acceder a una vista del estado actual de la pagina del restaurante Cathay:
    </p>
    <a class="btn btn-success" href="../Platos.php" target="blank"> Visualizar Pagina.</a>
    <p>Por medio del siguiente botón podras acceder a ver los usuarios que se encuentran registrados actualmente en la pagina del restaurante Cathay:
    </p>
    <a class="btn btn-success" href="../Usuarios/Crud/ver.php" target="blank"> Ver Usuarios </a>
</div>

<div class="Panel-Inferior">
  <h1 class="Titulo-Panel">Agregar Un Plato.</h1>
    <p>En este espació usted podra agregar un plato.</p>
    <a class="btn btn-success" href="#popup">Registrar Plato</a>
  <div class="modal-wrapper" id="popup">
    <div class="popup-contenedor">
      <a class="popup-cerrar" href="#">X</a>
      <form class="Formu" id="Form-Admin" method="POST" action="administrador.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="Titulo-Plato">Titulo Del Plato.</label>
          <input type="text" name="Nombre" placeholder="Titulo Del Plato" required="required" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="ImagenPlato">Imagen Del Plato.</label>
          <input type="file" name="Imagen" id="archivos" value="30000" placeholder="Imagen Del Producto" required="required" class="file-loading"/>
        </div>
        <div class="form-group">
          <label for="PrecioPlato">Precio Del Plato.</label>
          <input type="text" name="Valor" placeholder="Precio Del Producto" required="required" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="DescripcionPlato">Descripción Del Producto</label>
          <input type="text" name="Descripcion" placeholder="Descripción Del Producto" required="required" class="form-control"/>
        </div>
        <a href=""><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></a>
        <button type="submit" name="insert" value="INSERTAR DATOS" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>
</div>

<!--Ahora Empiezo Con Las Conexiones-->

<?php 
include_once("../Conexion/conexion.php");

//Guardar Datos
if (isset($_POST['insert'])) {
  $Nombre = $_POST['Nombre'];
  $Valor = $_POST['Valor'];
  $Descripcion = $_POST['Descripcion'];  
  $Imagen = $_POST['Imagen'];

  //Busca Si Ya Existe
  $buscar = "SELECT * FROM platos WHERE titulo = '".$Nombre."'";    

    //Si no Existe Haga...
  if ($ejecutar = mysqli_query($connect,$buscar)) {

    $numrows = mysqli_num_rows($ejecutar);

    if ($numrows == 0) {
    
    $insertar = "INSERT INTO platos (titulo, descripcion, valor, imagen_plato) VALUES ('$Nombre','$Descripcion','$Valor','$Imagen')";
    $agregar = mysqli_query($connect,$insertar);
    ?>
      <script>
        alert('Has Registrado Exitosamente Un Plato En El Restaurante Cathay.');
        window.location.href='administrador.php';//Ruta a donde voy a ser redireccionado.
      </script>
    <?php
    }else{
      echo "<script language='JavaScript'>alert('Tu Plato'+' $Nombre'+' Ya Existe');</script>"

     ?>
      <script>
        window.location.href='administrador.php';//Ruta a donde voy a ser redireccionado.
      </script>
    <?php
    }
  }
}
?>
<script src="../Js/Slider.js"></script>
<script>
  $("#archivos").fileinput({});
</script>
</body>
</html>
