<?php session_start();

	if(!isset($_SESSION["id_usuario"]) || $_SESSION["id_usuario"]==null){
        print "<script>alert(\"Acceso invalido!\");window.location='../Login/login.php';</script>";
    }/*Este Bloque De Codigo Sirve Para Iniciar La Sessión Ya Antes Programada
     *Además De Que Verifica Si Va A Entrar Por Url Sin El Login, Lo De Vuelve
     *Obligandolo A Iniciar Sessión.
     */
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cliente</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css"/>
	<script type="text/javascript" src="../../Js/live.js"></script>
</head>
<body>
<h1>Estoy En Comprador</h1>
<section class="Sector-Compra" id="Sector-Compra">
	

	<a class="cerrarSesion" href="../php/logout.php">Cerrar Session</a>
</section>


</body>
</html>