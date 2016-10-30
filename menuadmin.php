<?php 
session_start();
if(isset($_SESSION['usuario'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
</head>
<body>
	<div class="container-fluid">
		<h1>Ecncuesta</h1>
	</div>
</body>
</html>

<?php 
}
else
	{
	echo '<script> window.location="admin.php"; </script>';
	}
 ?>