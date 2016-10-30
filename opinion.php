<?php 
require('conexion.php');
$opinion=$_GET['opinion'];

#if meencanta
if($opinion==1){
$query="SELECT * FROM meencanta";
$resultado=$mysqli->query($query);
	while($row=$resultado->fetch_assoc())
	{ 
		$meencatalikes=$row['MEE_likes'];
	}
$likes= $meencatalikes+1;
$query="UPDATE meencanta SET MEE_likes='$likes'";
$resultado=$mysqli->query($query);
	if($resultado>0)
	{
		header('Location: index.php?opinion=si');
	}
}
#if Megusta
if($opinion==2){
$query="SELECT * FROM megusta";
$resultado=$mysqli->query($query);
	while($row=$resultado->fetch_assoc())
	{ 
		$megusta=$row['MEG_likes'];
	}
$likess= $megusta+1;
$query="UPDATE megusta SET MEG_likes='$likess'";
$resultado=$mysqli->query($query);
	if($resultado>0)
	{
		header('Location: index.php?opinion=si');
	}
}

#nomegusta
if($opinion==3){
$query="SELECT * FROM nomegusta";
$resultado=$mysqli->query($query);
	while($row=$resultado->fetch_assoc())
	{ 
		$megusta=$row['NOM_likes'];
	}
$likesss= $megusta+1;
$query="UPDATE nomegusta SET NOM_likes='$likesss'";
$resultado=$mysqli->query($query);
	if($resultado>0)
	{
		header('Location: index.php?opinion=si');
	}
}
 ?>