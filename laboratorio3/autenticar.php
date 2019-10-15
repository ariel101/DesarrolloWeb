<?php session_start();
	include("conexion.php");
	$usuario=$_POST['usuario'];
	$contra=$_POST['contra'];
	$reusuario=$_POST['recorusuario'];
	$repass=$_POST['recorpass'];
	if($reusuario=='recordar')
		setcookie("usuario",$reusuario,time()+3600);
	if($repass=='recordar')
		setcookie("contra",$repass,time()+3600);
	$sql="SELECT Usuario,Password FROM usuarios WHERE Usuario='$usuario' AND Password='$contra'";
	$resultado=$con->query($sql);
	if ($fila = $resultado->fetch_assoc())
		{
		$_SESSION['usuario']=$fila['Usuario'];
		$_SESSION['password']=$fila['Password'];
		echo "Bienvenido: ".$_SESSION['usuario'];
		header("Location:fitroduccion.html");
		}
		else
		{	
		 echo "Error datos incorrectos de inicio de sesion";
		header("Location:formlogin.php");
		}

?>