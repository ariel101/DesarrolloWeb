<?php 
$fila=$_POST['valor1'];
$altura=$_POST['valor2'];
$columna=$_POST['valor3'];
$ancho=$_POST['valor4'];
$n;
for ($i=0; $i <=$fila ; $i++) { 
	for ($j=0; $j <$columna ; $j++) { 
	echo "<table style='border: 1px solid black; width: 80px; height: 80px'>
				<tr>
					<td></td>
				</tr>
			
		  </table>";
	}
	echo"<table style='border: 1px solid black; width: 50px; height: 50px'>
		<tr>
			<td></td>
		</tr>
	</table>";
}

 ?>