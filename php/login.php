<?php
session_start();

include '../Conexion/conexion.php';


			$user = $_POST['id_user'];
			$password = $_POST['password'];		
			//$user_id=null;
		
			$sql1= "select * from usuarios where correo='$user' and password='$password'";
			$query = $connect->query($sql1);
			$r=$query->fetch_array();
			$idUser     = $r["id_usuario"];
			$nombre     = $r["nombre"] . ' ' . $r['apellido'];
			$correo     = $r["correo"];
			$contraseña = $r["password"];
			$rol        = $r['id_rol'];

			if ($correo == $user & $contraseña == $password) {

				$_SESSION['id_usuario'] = $idUser;
				$_SESSION['nombre'] = $nombre;
				$_SESSION['id_rol'] = $rol;

					if($_SESSION['id_rol']== 1){
						header("Location: ../Usuarios/administrador.php");
					}else if($_SESSION['id_rol'] == 2){
						header("Location: ../Usuarios/comprador.php");
					}
			}else{
			echo "<script> alert('Login y/o Password Incorrectos...'); document.location=(\"../Login/login.php\");</script>";
			}
?>
