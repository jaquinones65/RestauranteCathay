<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Bienvenido A Nuestro Menú</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="Js/live.js" type="text/javascript"></script>

</head>


<!--Inicio Mi Lista -->

<?php 

include_once("Conexion/conexion.php");

$listar = "SELECT * FROM platos";
$ejecutar = mysqli_query($connect,$listar);
$i = 0;

foreach ($fila = mysqli_fetch_array($ejecutar) as $key => $value) {
	

	echo '<div class="Caja" id="Caja">
			<h3 class="Titulo-Plato" id="Titulo-Plato">'.$value[1].'</h3>
			<img class="Imagen-Plato" id="imagen" alt="Imagen Del Plato" src="">
			
			<article class="Descripcion-Plato" id="Descripcion-Plato">
				<p class="Precio-Plato">
					
				</p>
				<p class="Texto-Plato" id="Texto-Plato">
					
				</p>
			</article>
		</div>';
}
while ($fila = mysqli_fetch_array($ejecutar)) {
	$idPlato = $fila['id_plato'];
	$titulo = $fila['titulo'];
	$descripcion = $fila['descripcion'];
	$valor = $fila['valor'];
	$imagen = $fila['imagen_plato'];

	$i++;
?>
	<tr align="center">
		<td><?php echo $idPlato; ?></td>
		<td><?php echo $titulo; ?></td>
		<td><?php echo $descripcion; ?></td>
		<td><?php echo $valor; ?></td>
		<td><?php echo $imagen; ?></td>
		<td><a href="editar.php?editar=<?php echo $idUsuario; ?>">Editar</a></td> 
		<td><a href="ver.php?eliminar=<?php echo $idUsuario; ?>">Eliminar</a></td>
	</tr>
<?php } ?>

<!--Finaliza Mi Lista -->

<body>
	<section class="Sector-Comidas">

		<h1 class="Platos-Titulo">Nuestros Deliciosos Platos.</h1>
		<div class="Caja" id="Caja">
			<h3 class="Titulo-Plato" id="Titulo-Plato"><?php echo $titulo; ?></h3>
			<?php echo '<img class="Imagen-Plato" id="imagen" alt="Imagen Del Plato" src="'.$imagen.'">' ?>
			
			<article class="Descripcion-Plato" id="Descripcion-Plato">
				<p class="Precio-Plato">
					<?php echo $valor; ?>
				</p>
				<p class="Texto-Plato" id="Texto-Plato">
					<?php echo $descripcion; ?>
				</p>
			</article>
		</div><!--
		<div class="Caja" id="Caja">
			<h3 class="Titulo-Plato" id="Titulo-Plato">Titulo Del Plato</h3>
			<img class="Imagen-Plato" id="Imagen-Plato" src="#" alt="Imagen Del Plato">
			<article class="Descripcion-Plato" id="Descripcion-Plato">
				<p class="Texto-Plato" id="Texto-Plato">
					Aqui se podra Ingresar Una Breve Descripción del plato...
				</p>
			</article>
		</div>
		<div class="Caja" id="Caja">
			<h3 class="Titulo-Plato" id="Titulo-Plato">Titulo Del Plato</h3>
			<img class="Imagen-Plato" id="Imagen-Plato" src="#" alt="Imagen Del Plato">
			<article class="Descripcion-Plato" id="Descripcion-Plato">
				<p class="Texto-Plato" id="Texto-Plato">
					Aqui se podra Ingresar Una Breve Descripción del plato...
				</p>
			</article>
		</div>
		<div class="Caja" id="Caja">
			<h3 class="Titulo-Plato" id="Titulo-Plato">Titulo Del Plato</h3>
			<img class="Imagen-Plato" id="Imagen-Plato" src="#" alt="Imagen Del Plato">
			<article class="Descripcion-Plato" id="Descripcion-Plato">
				<p class="Texto-Plato" id="Texto-Plato">
					Aqui se podra Ingresar Una Breve Descripción del plato...
				</p>
			</article>
		</div>
		<div class="Caja" id="Caja">
			<h3 class="Titulo-Plato" id="Titulo-Plato">Titulo Del Plato</h3>
			<img class="Imagen-Plato" id="Imagen-Plato" src="#" alt="Imagen Del Plato">
			<article class="Descripcion-Plato" id="Descripcion-Plato">
				<p class="Texto-Plato" id="Texto-Plato">
					Aqui se podra Ingresar Una Breve Descripción del plato...
				</p>
			</article>
		</div>
		<div class="Caja" id="Caja">
			<h3 class="Titulo-Plato" id="Titulo-Plato">Titulo Del Plato</h3>
			<img class="Imagen-Plato" id="Imagen-Plato" src="#" alt="Imagen Del Plato">
			<article class="Descripcion-Plato" id="Descripcion-Plato">
				<p class="Texto-Plato" id="Texto-Plato">
					Aqui se podra Ingresar Una Breve Descripción del plato...
				</p>
			</article>
		</div>-->
	</section>

<div class="Platos-Atras">
	<a class="VolverPlatos" href="./index.php">Volver.</a>
</div>

<footer class="FooterPlatos" id="FooterPlatos">

	<div class="Container1 ContainerPlatos">
		<h4 class="Titulo-Container">Horarios</h4>
			<p class="Hora-Items" >Lunes A Viernes:<br>10:30am Hasta Las 2:30pm<br>5:30pm Hasta Las 9:30pm</p>
			<p class="Hora-Items" >Sabados, Domingos Y Festivos:<br>10:30am Hasta Las 9:30pm</p>

	</div>
	<div class="Container2 ContainerPlatos">
		<h4 class="Titulo-Container">Domicilio</h4>
			<p class="Domi-Items" >Tel/Fijo:<br>660 1654 - 660 1655 - 6601388</p>
			<p class="Domi-Items" >Tel/Cel:<br>315 261 5676 - 314 757 8204p</p>
			<p class="Domi-Items" >Valor Del Domicilio: $ 1.000 Pesos <br>Dependiendo El Barrio.</p>
			<!--<p class="Domi-Items" >Escribenos A Nuestro Whatsapp:<br> 301 743 8654</p>-->

	</div>
	<div class="Container3 ContainerPlatos">
		<h4 class="Titulo-Container">Redes Sociales?</h4>
			<h5 class="Preg-Items" >Buscanos En Nuestras Redes Sociales</h5>
				<div class="Redes-Container">
					<div class="Redes">
						<a href="https://www.facebook.com/restaurantecathaycali/?ref=bookmarks" target="blank">
							<img class="Redes-Img" src="Img/facebook.png" id="facebook">
						</a>
					</div>
					<div class="Redes">
						<a href="https://www.youtube.com/channel/UC-AEf_0wfbyA25IGgYuAPGw?view_as=subscriber" target="blank"><img class="Redes-Img" src="Img/youtube.png" id="youtube"></a>
					</div>
					<div class="Redes">
						<a href="#popup"><img class="Redes-Img popup-link" src="Img/whatsapp.png" id="whatsapp"></a>
					</div>
					<div class="container">
					  	<!-- Modal -->
					  	<!--http://soyfrontend.com/crear-ventana-modal-con-solo-css/-->
						<div class="modal-wrapper" id="popup">
						   <div class="popup-contenedor">
						      <h2>Escribenos A Nuestro Whatsapp:</h2>
						      <p>301 743 7638...</p>
						      <a class="popup-cerrar" href="#Footer">X</a>
						   </div>
						</div>
						<!-- Modal End-->
					</div>
				</div>
			</div>
</footer>
</body>
</html>