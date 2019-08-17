<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>

	<title>Restaurante Cathay</title>
	<link rel="stylesheet" href="Fonts/icomoon.eot"/>
	<link rel="stylesheet" href="Fonts/icomoon.svg"/>
	<link rel="stylesheet" href="Fonts/icomoon.ttf"/>
	<link rel="stylesheet" href="Fonts/icomoon.woff"/>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="Js/live.js" type="text/javascript"></script>
	

</head>
<nav class="CambioColor">
	<header class="Header" id="Menu">
	<h2 class="Titulo-Cathay">
		Restaurante Cathay
	</h2>
	<ul class="Menu" >
			<a class="Link-Menu" href="#Platos"><li class="Menu-Item">Menú</li></a>
			<a class="Link-Menu" href="#Mapa"><li class="Menu-Item">Ubicación</li></a>
			<a class="Link-Menu" href="#Footer"><li class="Menu-Item">Contáctanos</li></a>
		</ul>
		<ul class="Menu-Login">
			<a class="Login-Link" href="Login/login.php"><li class="Menu-Item">Login</li></a>
			<a class="Login-Link" href="Formulario/formulario.php"><li class="Menu-Item">Registrar</li></a>			
		</ul>
	</header>
</nav>
<body class="body">

<video src="Video/CATHAY_1.mp4" class="Video"></video>

<section class="Slider">
	<div id="contenedor-slider" class="contenedor-slider">
		<div id="slider" class="slider">
		    <section class="slider__section"><img src="img/2x1.png" class="slider__img"></section>
		    <section class="slider__section"><img src="img/2.png" class="slider__img"></section>
		    <section class="slider__section"><img src="img/3.png" class="slider__img"></section>
		    <section class="slider__section"><img src="img/Agridulce.png" class="slider__img"></section>
		    <section class="slider__section"><img src="img/Arroz Cantones.png" class="slider__img"></section>
		    <section class="slider__section"><img src="img/Chopsuey Mixto.png" class="slider__img"></section>
		    <section class="slider__section"><img src="img/Chow Fan Cathay.png" class="slider__img"></section>
		    <section class="slider__section"><img src="img/Chow Fan Mixto.png" class="slider__img"></section>
		    <section class="slider__section"><img src="img/Chow Fan Pollo Camarón.png" class="slider__img"></section>
		    <section class="slider__section"><img src="img/Promoción Pollo.png" class="slider__img"></section>
	  	</div>
		<div id="btn-prev" class="btn-prev">&#60;</div>
		<div id="btn-next" class="btn-next">&#62;</div>
	 </div>
</section>

<section class="Platos" id="Platos">
	<article class="Pantalla" id="Pantalla">
		<h2 class="View-Platos">Observa Aqui Tu Plato.</h2>
	</article>
	<article class="Platos-Item">
		<h1 class="Titulo-Platos"> Nuestro Menú </h1>
			<div class="Item-Platos">
				<h3 class="Titulo-Item">Chow Fan</h3>
					<a class="Link-Menu" href="#"><p id="c2" class="Platillos"><span class="icon-check-circle">Arroz Chino Mixto</span></a>
					<img class="c2" src="Img/Chow Fan Mixto.png"></p>
					<a class="Link-Menu" href="#"><p id="c3" class="Platillos"><span class="icon-check-circle">Arroz Pollo Camarón</span></a>
					<img class="c3" src="Img/Chow Fan Pollo Camarón.png"></p>
					<a class="Link-Menu" href=""><p id="c4" class="Platillos"><span class="icon-check-circle">Arroz Cantones</span></a>
					<img class="c4" src="Img/Chow Fan Cantones.png"></p>
					<a class="Link-Menu" href=""><p id="c5" class="Platillos"><span class="icon-check-circle">Arroz Cathay</span></a>
					<img class="c5" src="Img/Chow Fan Cathay.png"></p>
			</div>
			<div class="Item-Platos">
				<h3 class="Titulo-Item">ChopSuey</h3>
					<a class="Link-Menu" href=""><p id="c6" class="Platillos"><span class="icon-check-circle">Verduras Mixta</span></a>
					<img class="c6" src="Img/Chopsuey Mixto.png"></p>
					<a class="Link-Menu" href=""><p id="c7" class="Platillos"><span class="icon-check-circle">Personal Pollo</span></a>
					<img class="c7" src="Img/Personal Pollo.png"></p>
					<a class="Link-Menu" href=""><p id="c8" class="Platillos"><span class="icon-check-circle">Personal Chuleta</span></a>
					<img class="c8" src="Img/Personal Chuleta.png"></p>
					<a class="Link-Menu" href=""><p id="c9" class="Platillos"><span class="icon-check-circle">Personal Pollo A La Naranja</span></a>
					<img class="c9" src="Img/Personal Pollo A La Naranja.png"></p>
			</div>
			<div class="Item-Platos">
				<h3 class="Titulo-Item">Promociones</h3>
					<a class="Link-Menu" href=""><p id="c10" class="Platillos"><span class="icon-check-circle">Promoción Costilla</span></a>
					<img class="c10" src="Img/Personal Costilla.png"></p>
					<a class="Link-Menu" href=""><p id="c11" class="Platillos"><span class="icon-check-circle">Promoción Chuleta</span></a>
					<img class="c11" src="Img/Promoción Chuleta.png"></p>
					<a class="Link-Menu" href=""><p id="c12" class="Platillos"><span class="icon-check-circle">Promoción Pollo</span></a>
					<img class="c12" src="Img/Promoción Pollo.png"></p>
					<a class="Link-Menu" href=""><p id="c13" class="Platillos"><span class="icon-check-circle"></span></a>
					<img class="c13" src="Img/3.png"></p>
			</div>
			<div class="Item-Platos">
				<h3 class="Titulo-Item">Entradas Y Especiales</h3>
					<a class="Link-Menu" href=""><p id="c14" class="Platillos"><span class="icon-check-circle">Lumpias</span></a>
					<img class="c14" src="Img/Lumpias.png"></p>
					<a class="Link-Menu" href=""><p id="c15" class="Platillos"><span class="icon-check-circle">Tallarines</span></a>
					<img class="c15" src="Img/Low mien.png"></p>
					<a class="Link-Menu" href=""><p id="c16" class="Platillos"><span class="icon-check-circle">Agridulce Pollo/Cerdo</span></a>
					<img class="c16" src="Img/Agridulce.png"></p>
					<a class="Link-Menu" href=""><p id="c17" class="Platillos"><span class="icon-check-circle">Otros</span></a>
					<img class="c17" src="Img/3.png"></p>
			</div>
				<h3 class="VerMas">
					<a class="Link-VerMas" href="platos.php"><li class="Ver-Item">Ver Más</li></a>
				</h3>
	</article>
</section>

<section class="Mapa" id="Mapa">
	<h1 class="Titulo-Map">Nuestra Ubicación</h1>
		<iframe class="Map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d592.0088836222257!2d-76.53250413465649!3d3.4600941950189332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a66c65f70173%3A0xdb06e4648c745e2!2sRestaurante+Cathay!5e0!3m2!1ses!2sco!4v1507946539565" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
		</iframe>

</section>
<footer class="Footer" id="Footer">
	<div class="Container1">
		<h4 class="Titulo-Container">Horarios</h4>
			<p class="Hora-Items" >Lunes A Viernes:<br>10:30am Hasta Las 2:30pm<br>5:30pm Hasta Las 9:30pm</p>
			<p class="Hora-Items" >Sabados, Domingos Y Festivos:<br>10:30am Hasta Las 9:30pm</p>

	</div>
	<div class="Container2">
		<h4 class="Titulo-Container">Domicilio</h4>
			<p class="Domi-Items" >Tel/Fijo:<br>660 1654 - 660 1655 - 6601388</p>
			<p class="Domi-Items" >Tel/Cel:<br>315 261 5676 - 314 757 8204p</p>
			<p class="Domi-Items" >Valor Del Domicilio: $ 1.000 Pesos <br>Dependiendo El Barrio.</p>
			<!--<p class="Domi-Items" >Escribenos A Nuestro Whatsapp:<br> 301 743 8654</p>-->

	</div>
	<div class="Container3">
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
<script src="Js/Slider.js"></script>
<script>
      $(window).scroll(function() {
        if ($("#Menu").offset().top > 298) {
            $("#Menu").addClass("CambioColor");
        } else {
            $("#Menu").removeClass("CambioColor");
        }
      });
</script>
</body>
</html>
