<?php 
/*type checkbox 
usuario,almno,carreras*/

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="autenticar.php" method="POST">
		<label>Usuario</label>
		<input type="text" name="usuario" value="<?php if(isset($_COOKIE['usuario'])){ echo $_COOKIE['usuario'];
		}?>"><br><br>	
		<label>Contraseña</label>
		<input type="Password" name="contra" value="<?php if(isset($_COOKIE['contra'])){
			echo $_COOKIE['contra'];
		} ?>"><br><br>
		<input type="checkbox" name="recorusuario" value="recordar"<?php if(isset($_COOKIE['usuario'])){
			echo "checked='checked'";
		} ?>>recordar usuario <br>
		<input type="checkbox" name="recorpass" value="recordar" checked="checked">recordar contrasena <br>
		<input type="submit" value="Ingresar">
	</form>
</body>
</html>
