
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<link rel="icon" href="img/logoitchaux.jpg">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/validar.js"></script>
	<script type="text/javascript" src="js/bootstrap-notify.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.js">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<center>
			<img src="img/header-sep.png">
			</center>
		</div>
		<div class="col-sm-6">
			<h2>TECNOLÓGICO NACIONAL DE MEXICO</h2>
			<h4>INSTITUTO TECNOLÓGICO DE CHILPANCINGO</h4>
		</div>
		<div class="col-sm-3">
			<center>
			<img  class="logo" src="img/logoitchaux.jpg">
			</center>
		</div>
	</div>
</div>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$error=$_GET[error];
if ($error=="si") {
?>
<script type="text/javascript">
	$(document).ready(function(){
		$.notify({
			icon: 'glyphicon glyphicon-user',
			message: '<strong>Usuario ó Contraseña </strong>incorrectos, intentelo nuevamente porfavor :) '
			},{
			type: 'danger'
			});	
	});
</script>
<?php
}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<center>
	<form action="validar.php" method="POST">
	<div class="container-fluit">
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
			<div class="form-group">
			<input type="text" name="usuario" id="" placeholder="usuario" autocomplete="off">
			</div>
			<div class="form-group">
			<input type="password" name="pass" placeholder="contraseña" autocomplete="off">
			</div>
			<div class="form-group">
			<button type="submit" name="contador" id="submit" class="btn btn-primary but">
				<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
				Iniciar Sesión
			</button>
			</div>
		</div>
		<div class="col-sm-3">	
		</div>
	</div>
	</div>
	</form>
</center>
</body>
</html>