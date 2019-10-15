<?php  
	$con =new mysqli("localhost", "root", "","bd_lab3");
	if ($con->connect_error)
	die ("conexion fallada".$con->connect_error);

?>