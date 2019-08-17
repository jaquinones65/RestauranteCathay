<?php

//Obtenemos la IP del visitante y la hora actual.
$ip=$_SERVER['REMOTE_ADDR'];
$hora=time();
$existe=0;

//Tiempo que tardará en actualizarse el contador (60=1 minuto, 1800=media hora)
$sesion=$hora-1800;

$archivo="contar_usuarios.dat";
$ar=@file($archivo);

//Se abre el archivo de texto para eliminar ips expiradas y crear nuevo array con las vigentes.
//Se crea un buqle para recorrer el archivo y leer su contenido
foreach($ar as $pet){
$ele=explode(":",$pet);
$ai=trim($ele[1]);

if(trim($ele[1]) == $ip && trim($ele[0]) > $sesion)
{
$existe=1;
}
if(trim($ele[0]) > $sesion)
{
$array[]=implode(":",$ele);
}
}

//Se abre el archivo para guardar los datos nuevos.
//Se crea un buqle para recorrer el archivo y leer su contenido
$p=@fopen($archivo,"w+");
if($existe == 0){
$array[]=$hora.":".$ip."n";
}

foreach($array as $eoeo){
$grabar=trim($eoeo)."n";
}

@fwrite($p,$grabar);
@fclose($p);

$con=@file($archivo);

//Se guarda en una variable el número de usuarios únicos visitando la web
$n_usuarios=count($con);

//Se muestran los datos formateados en color rojo
echo "<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1?>
</head>
<body STYLE='font-family: Arial, Helvetica, Sans Serif; font-size:12px;font-weight: bold;color:#FF0000?>
<div align='left'><img border='0? src='logo_useronline.gif'>
$n_usuarios usuarios en línea
</div>
</body>
</html>";

?>

<!--visitas.php-->

<?php

//Se guardan en variables los nombres de archivo, día y mes
$fichcontmes = "contar_mes.dat";
$fichdia = "dia.dat";
$fichcontdia = "contar_dia.dat";
$fichmes = "mes.dat";
$arr=getdate();
$dia= $arr["mday"];
$mes= $arr["mon"];

//Se abre el archivo del día para leer su contenido. Si es no es el mismo, se añade el nuevo día.
//Si el día es el mismo, se suma 1 al contador
$abrir_dia = fopen($fichdia, "r+");
$nuevo_dia = fgets($abrir_dia, 255);
fclose($abrir_dia);
if ($nuevo_dia != $dia)
{
$undia_mas = fopen($fichdia, "w");
fputs($undia_mas, $dia);
fclose($undia_mas);
}

$visit_dia = fopen($fichcontdia, "r+");
$suma_dia = fgets($visit_dia, 255);
$suma_dia++;

//Si el dia del archivo no es el mismo del sistema, se pone el contador a cero
if ($nuevo_dia != $dia)
{
fclose($visit_dia);
$dia_acero = fopen($fichcontdia, "w");
fputs($dia_acero, "1");
fclose($dia_acero);
}
else
{
fseek($visit_dia,SEEK_SET);
fputs($visit_dia, $suma_dia);
fclose($visit_dia);
}

//Este módulo es idéntico al del día de arriba, pero en este caso solo para el mes.
$abrir_mes = fopen($fichmes, "r+");
$nuevo_mes = fgets($abrir_mes, 255);
fclose($abrir_mes);
if ($nuevo_mes != $mes)
{
$unmes_mas = fopen($fichmes, "w");
fputs($unmes_mas, $mes);
fclose($unmes_mas);
}

$visit_mes = fopen($fichcontmes, "r+");
$suma_mes = fgets($visit_mes, 255);
$suma_mes++;
if ($nuevo_mes != $mes)
{
fclose($visit_mes);
$mes_acero = fopen($fichcontmes, "w");
fputs($mes_acero, "1");
fclose($mes_acero);
}
else
{
fseek($visit_mes,SEEK_SET);
fputs($visit_mes, $suma_mes);
fclose($visit_mes);
}

//Se muestran los datos guardados formateados en color verde
echo "<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1?>
</head>
<body STYLE='font-family: Arial, Helvetica, Sans Serif; font-size:12px;font-weight: bold; color:#008000?>
<div align='left'><img border='0? src='logo_visitas.gif'>
Pág. vistas hoy: $suma_dia, Mes: $suma_mes
</div>
</body>
</html>";

?>

<!--Para visualizar los datos utilizo dos IFRAME:-->
