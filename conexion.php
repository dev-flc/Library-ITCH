<?php

$mysqli = new mysqli("localhost","root","forever","biblioteca"); 
	if(mysqli_connect_errno()){
		echo 'Fallo: en la conexion de la base de datos ', mysqli_connect_error();
		exit();
	}

