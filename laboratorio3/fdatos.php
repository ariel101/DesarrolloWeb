<?php  session_start();
	$num=$_POST['numero'];
	$_SESSION['numero']=$num;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="insertar.php" method="POST">
		<table>
			<tr>
				<th></th>
				<th>Id</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Cu</th>
				<th>Sexo</th>
				<th>Carrera</th>
			</tr>
			<?php for($i=1;$i<=$num;$i++){
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><input type="text" name="id<?php echo $i; ?>" size="5px"></td>
				<td><input type="text" name="nombre<?php echo $i; ?>"></td>
				<td><input type="text" name="apellido<?php echo $i; ?>"></td>
				<td><input type="text" name="cu<?php echo $i; ?>" size="10px"></td>
				<td><input type="radio" name="sexo<?php echo $i; ?>" value="M">Masculino &emsp;
					<input type="radio" name="sexo<?php echo $i; ?>" value="F">Femenino &ensp;
				</td>
				<td><select name="carrera<?php echo $i; ?>">
					<option>Ing sistemas</option>
					<option selected="selected">Ing Ciencias de la computacion</option>
					<option>Ing Tecnologias de la informacion</option>
					</select>
				</td>
			</tr>

			<?php } ?>
		</table><br>
		<p style="margin-left: 25%"><input type="submit" value="Listar"></p>
	</form>

</body>
</html>