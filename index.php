<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />


<title>Documento sin título</title>
</head>

<?php 
	
	if ($_GET['login']=="ok"){
		if(($_POST['user']!=' ' )&&($_POST['pass']!=' ')){
			if (($_POST['user']==' admin ' )&&($_POST['pass']!='admin ')) {
					echo"<script>alert ('Usuario o contraseña incorrecta')</script>";
			}else{
				echo"<script>alert ('bienvenido')</script>"	;
				echo"<script>window.location= 'home.php;'</script>";	
				
			}
		} else {

		
			echo"<script>alert ('no deje campo vacios')</script>";
		}
	
		}	
	
		

?>
<body>
	<div id="contenedor">
		<div id="principal">
			<div id="fondo_login">
				<div id="login">
					<form class="inicio" action="index.php?login=ok" method="POST">
						<p><strong><label for="name">Usuario:</label></strong>
							<input type="text" id="user" name="user" class="uno" style="border:solid 1px #FFFFFF;" />
						</p>
						<p><strong><label for="pass">Clave:</label></strong>
							<input type="password" id="pass" name="pass" class="dos" style="border:solid 1px #FFFFFF;" />
						</p>
						<p><button type="submit"></button></p>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
