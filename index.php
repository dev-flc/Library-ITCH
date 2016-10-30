<?php 
require('conexion.php');
$fecha= date("Y-m-d");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
   	<link rel="icon" href="img/logoitchaux.jpg">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/validar.js"></script>
	<script type="text/javascript" src="js/bootstrap-notify.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.js">
</head>
<body>
<?php 
error_reporting(E_ALL ^ E_NOTICE);
$dato=$_GET[dato];
$opinion=$_GET[opinion];
if ($dato=="si") {
?>
<script type="text/javascript">
	$(document).ready(function(){
		$.notify({
			icon: 'glyphicon glyphicon-thumbs-up',
			message: '<strong>Gracias</strong> por registrarte'
			},{
			type: 'success'
			});	
	});
</script>
<?php
}
if ($opinion=="si") {
?>
<script type="text/javascript">
	$(document).ready(function(){
		$.notify({
			title:'<strong>Gracias.</strong>',
			icon: 'glyphicon glyphicon-thumbs-up',
			message: 'tu opinion es importante para nosotros'
			},{
			type: 'success'
			});	
	});
</script>
<?php
}
?>

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
<form  name="formulario" id="formulario" method="POST" action="registroencuesta.php" >
<div class="container-fluid">
	<div class="row"><center>
	<div class="col-sm-12">
		<br />
		<br /><br />
		<div class="form-group">
			<input type="text" class="solo-numero" name="matricula" id="matricula" placeholder="Matricula" autocomplete="off" />
		</div>
		<br />
		<br />
	</div>

<!-- Ingenieria En Sistemas Computacionales -->
	<div class="col-sm-3">
			<?php 
				$s=0; 
				$query="SELECT * FROM encuesta WHERE ENC_carrera=1 AND ENC_fecha='$fecha'";
					$resultado=$mysqli->query($query);
	 				while($row=$resultado->fetch_assoc()){ 
					$i++;
					$sistem=$s+$i;

 				}	
			 ?>
			<button type="submit" name="sistemas" id="submit" class="btn btn-primary but">
				<span class="glyphicon glyphicon-education taicon" aria-hidden="true"></span>
				 SISTEMAS
				<span class="badge"><?php echo $sistem; ?></span>
			</button>
	</div>

<!-- Informatica -->
	<div class="col-sm-2">
			<?php 
				$in=0; 
				$query="SELECT * FROM encuesta WHERE ENC_carrera=2 AND ENC_fecha='$fecha'";
					$resultado=$mysqli->query($query);
	 				while($row=$resultado->fetch_assoc()){ 
					$a++;
					$infor=$in+$a;

 				}	
			 ?>
			<button type="submit" name="informatica" id="submit" class="btn btn-primary but">
				<span class="glyphicon glyphicon-phone taicon" aria-hidden="true"></span>
				INFORMATICA
				<span class="badge"><?php echo $infor; ?></span>
			</button>
	</div>
 
<!-- Ingecieria Civil -->
	<div class="col-sm-2">
			<?php 
				$ci=0; 
				$query="SELECT * FROM encuesta WHERE ENC_carrera=3 AND ENC_fecha='$fecha'";
					$resultado=$mysqli->query($query);
	 				while($row=$resultado->fetch_assoc()){ 
					$c++;
					$civ=$ci+$c;

 				}	
			 ?>
			<button type="submit" name="civil" id="submit" class="btn btn-primary but">
				<span class="glyphicon glyphicon-indent-right taicon" aria-hidden="true"></span>
				CIVIL
				<span class="badge"><?php echo $civ; ?></span>
			</button>
	</div>

<!-- Gestion Empresarial -->
	<div class="col-sm-2">
			<?php 
				$ge=0; 
				$query="SELECT * FROM encuesta WHERE ENC_carrera=4 AND ENC_fecha='$fecha'";
					$resultado=$mysqli->query($query);
	 				while($row=$resultado->fetch_assoc()){ 
					$g++;
					$emp=$ge+$g;

 				}	
			 ?>
			<button type="submit" name="gestion" id="submit" class="btn btn-primary but">
				<span class="glyphicon glyphicon-object-align-bottom taicon" aria-hidden="true"></span> 
				GESTION
				<span class="badge"><?php echo $emp; ?></span>	
			</button>

	</div>

<!-- Comtador publico -->
	<div class="col-sm-3">
			<?php 
				$co=0; 
				$query="SELECT * FROM encuesta WHERE ENC_carrera=5 AND ENC_fecha='$fecha'";
					$resultado=$mysqli->query($query);
	 				while($row=$resultado->fetch_assoc()){ 
					$h++;
					$pub=$co+$h;

 				}	
			 ?>
			<button type="submit" name="contador" id="submit" class="btn btn-primary but">
				<span class="glyphicon glyphicon-book taicon" aria-hidden="true"></span>
				CONTABILIDAD
				<span class="badge"><?php echo $pub; ?></span>
			</button>
	</div>
	</center></div>
</div>
</form>
<br />
<br />
<br />
<br />
<br />
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2">

		</div>
		<div class="col-sm-8">
				
			<center>
			<?php 
				$query="SELECT * FROM meencanta";
					$resultado=$mysqli->query($query);
	 				while($row=$resultado->fetch_assoc()){ 
					$meencatalikes=$row['MEE_likes'];
 				}	
			 ?>
			<a href="opinion.php?opinion=1" class="btn btn-link">
			<span class="glyphicon glyphicon-heart-empty opi meencanta" aria-hidden="true"></span><span class="badge numero"><?php echo $meencatalikes; ?></span>
			</a>
		
			<?php 
				$query="SELECT * FROM megusta";
					$resultado=$mysqli->query($query);
	 				while($row=$resultado->fetch_assoc()){ 
					$megustalikes=$row['MEG_likes'];
 				}	
			 ?>
			<a href="opinion.php?opinion=2" class="btn btn-link">
			<span class="glyphicon glyphicon-thumbs-up opi megusta" aria-hidden="true"></span><span class="badge numero"><?php echo $megustalikes; ?></span>
			</a>
			
			<?php 
				$query="SELECT * FROM nomegusta";
					$resultado=$mysqli->query($query);
	 				while($row=$resultado->fetch_assoc()){ 
					$nomegustalikes=$row['NOM_likes'];
 				}	
			 ?>
			<a href="opinion.php?opinion=3" class="btn btn-link">
			<span class="glyphicon glyphicon-thumbs-down opi nomegusta" aria-hidden="true"></span><span class="badge numero"><?php echo $nomegustalikes; ?></span>
			</a>
			</center>
		</div>
		<div class="col-sm-2">
			
		</div>
	</div>
</div>
<br />
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2">

		</div>
		<div class="col-sm-8">
			<h4>Que opinas de nuestros servicios..?</h4>
		</div>
		<div class="col-sm-2">
			
		</div>
	</div>
</div>
</body>
</html>

