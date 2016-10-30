<?php 

require('conexion.php');

$matricula=$_POST['matricula'];
$sistemas=1;
$informatica=2;
$civil=3;
$gestion=4;
$contador=5;
$fecha= date("Y-m-d");
$hora= date("g:i:s");


if (isset($_POST['sistemas'])){
    $query="INSERT INTO encuesta VALUES (null,'$matricula','$sistemas', '$fecha', '$hora')";
			$resultado=$mysqli->query($query);
			if($resultado>0)
				{
					header('Location: index.php?dato=si');
				}
			else
				{ 
					header('Location: index.php?dato=no');
				} 
}
if (isset($_POST['informatica'])){
    $query="INSERT INTO encuesta VALUES (null,'$matricula','$informatica', '$fecha', '$hora')";
			$resultado=$mysqli->query($query);
			if($resultado>0)
				{
					header('Location: index.php?dato=si');
				}
			else
				{ 
					header('Location: index.php?dato=no');
				}
}

if (isset($_POST['contador'])){
    $query="INSERT INTO encuesta VALUES (null,'$matricula','$contador', '$fecha', '$hora')";
			$resultado=$mysqli->query($query);
			if($resultado>0)
				{
					header('Location: index.php?dato=si');
				}
			else
				{ 
					header('Location: index.php?dato=no');
				}
}
if (isset($_POST['civil'])){
    $query="INSERT INTO encuesta VALUES (null,'$matricula','$civil', '$fecha', '$hora')";
			$resultado=$mysqli->query($query);
			if($resultado>0)
				{
					header('Location: index.php?dato=si');
				}
			else
				{ 
					header('Location: index.php?dato=no');
				}
}

if (isset($_POST['gestion'])){
    $query="INSERT INTO encuesta VALUES (null,'$matricula','$gestion', '$fecha', '$hora')";
			$resultado=$mysqli->query($query);
			if($resultado>0)
				{
					header('Location: index.php?dato=si');
				}
			else
				{ 
					header('Location: index.php?dato=no');
				}
}
