<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Cathay - Inicia Sección</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.min.css"/>
		
		<style>
			.login-principal{
				margin-bottom: 20%;
			}
			.login-container{
				top: 115px;
				left: 300px;
			}
			.input-login{
				width: 100%;
			}

			@media screen and (max-width: 991px){
				
			.login-principal{
				margin-bottom: 20%;
				}
			.login-container{
				top: 115px;
				left: -40px;
				}
			}

			@media screen and (max-width: 828px){
				
			.login-principal{
				margin-bottom: 20%;
				margin-left: 7%;
				}
			.login-container{
				top: 115px;
				left: -40px;
				}
			}
			@media screen and (max-width: 536px){
				
			.login-principal{
				margin-bottom: 44%;
				margin-left: 7%;
				}
			.login-container{
				top: 115px;
				left: -40px;
				}
			}
			@media screen and (max-width: 377px){
				
			.login-principal{
				margin-bottom: 64%;
				margin-left: 18%;
				}
			.login-container{
				top: 115px;
				left: -40px;
				}
			}
	</style>
	
	<script type="text/javascript">
		function validar() {
			if(document.formulario.id_user.value=="" ||document.formulario.password.value=="") {
				alert("Todos los Campos deben ser Diligenciados.");
				return false;
			} else {
				return true;
			}
		}

	</script>
</head>

<body>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"> Cathay </a>
        </div>
		
      </div>
    </nav>

	<!--FORMULARIO LOGIN-->
	<div class="container login-principal">
		<div class="row">
			<div class="col-md-6 login-container" >
				<h2>Login</h2>
				<br/>
				<form role="form" name="formulario" onsubmit="return validar()" action="../php/login.php" method="post"> 
					<hr />
					<div class="row">
						<div class="form-group">
							<div class="col-md-8 offset-md-4">
								<label for="id_user">Correo de Usuario </label>
								<input type="text" class="form-control input-login" id="id_user" name="id_user" size="50" maxlength="100" placeholder="Correo">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-8 offset-md-4">
								<label for="password">Contrase&ntilde;a</label>
								<input type="password" class="form-control input-login" id="password" name="password" size="50" maxlength="70" placeholder="Contrasena">
								
							</div>
						</div>
					</div>
					<hr />
					<button type="submit" class="btn btn-danger">Acceder</button>
					<a class="btn btn-success" href="../index.php">Volver</a>
				</form>
			</div>
		</div>
	</div>
	
	<hr>

    <footer>
		<p align="center">Desarrollado por Sistemas @ Clinica Palmira S.A. 2016</p>
    </footer>
	
	
</body>
</html>