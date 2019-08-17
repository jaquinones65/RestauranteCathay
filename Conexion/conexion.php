<?php
$host = "localhost"; 	//TU HOST//
$user = "root";	 		//TU USUARIO DEL HOST//
$pass = "1011";			//TU CONTRASEÑA//
$db = "cathay";			//TU BASE DE DATOS//

$connect = mysqli_connect ($host, $user, $pass, $db);
if(!$connect){
echo ("No se pudo conectar a la base de datos");
}else{
$select = mysqli_select_db($connect,$db);
}	
?>



