<?php  session_start();
	if(isset($_SESSION['usuario'])){
		include("conexion.php");
		$sql="SELECT * FROM alumnos A inner join carreras C on A.CodigoCarrera=C.CodigoCarrera";
		$resultado=$con->query($sql);
?>
			<table border="1px solid black">
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Cu</th>
					<th>Sexo</th>
					<th>CodigoCarrera</th>
					<th>Carrera</th>
				</tr>
		<?php
				while($fila=$resultado->fetch_assoc()){
		?>
				<tr>
					<td><?php echo $fila['Id']; ?></td>
					<td><?php echo $fila['Nombres']; ?></td>
					<td><?php echo $fila['Apellidos']; ?></td>
					<td><?php echo $fila['Cu']; ?></td>
					<td><?php echo $fila['Sexo']; ?></td>
					<td><?php echo $fila['CodigoCarrera']; ?></td>
					<td><?php echo $fila['Carrera']; ?></td>
				</tr>
			</table>
<?php	
				} 	
	}
	else{
		echo "usted no puede introducir datos";
	}

?>