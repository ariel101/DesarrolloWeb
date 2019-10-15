<?php  session_start();
	echo $_SESSION['numero']."<br>";
	for($i=1;$i<=$_SESSION['numero'];$i++){
	echo $id=$_POST['id'.$i];
	echo $nombre=$_POST['nombre'.$i];
	echo $apellido=$_POST['apellido'.$i];
	echo $cu=$_POST['cu'.$i];
	echo $sexo=$_POST['sexo'.$i];
	echo $carrera=$_POST['carrera'.$i];
	echo $_SESSION['usuario']."<br>";
	$sis='35-';
	$cico='111-';
	$info='112-';
	include("conexion.php");

		if(isset($_SESSION['usuario'])){
			if($carrera=='Ing Tecnologias de la informacion'){
				$sql="INSERT INTO alumnos(Id,Nombres,Apellidos,Cu,Sexo,CodigoCarrera)VALUES ('$id','$nombre','$apellido','$cu','$sexo','$info $i')";
			}
			else{
				if($carrera=='Ing Ciencias de la computacion'){
					$sql="INSERT INTO alumnos(Id,Nombres,Apellidos,Cu,Sexo,CodigoCarrera)VALUES ('$id','$nombre','$apellido','$cu','$sexo','$cico $i')";
				}
				else{
					$sql="INSERT INTO alumnos(Id,Nombres,Apellidos,Cu,Sexo,CodigoCarrera)VALUES ('$id','$nombre','$apellido','$cu','$sexo','$sis $i')";
				}
			}
			if($carrera=='Ing Tecnologias de la informacion'){
			$sqli="INSERT INTO carreras(CodigoCarrera,Carrera)VALUES('$info $i','$carrera')";
			}
			else{
				if($carrera=='Ing Ciencias de la computacion'){
					$sqli="INSERT INTO carreras(CodigoCarrera,Carrera)VALUES('$cico $i','$carrera')";
				}
				else{
					$sqli="INSERT INTO carreras(CodigoCarrera,Carrera)VALUES('$sis $i','$carrera')";
				}
			}
			$resul=$con->query($sqli);
			$resultado=$con->query($sql);
			if (mysqli_query($con, $sql)) {
     			echo "ejecucion exitosa";
			}
			else{
				echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}
		}
		else{
			echo "usted no esta autorizado";
		}
	}
?>