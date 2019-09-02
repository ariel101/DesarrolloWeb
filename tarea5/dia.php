<?php 
$dias=$_GET['dias'];
switch ($dias) {
	case '1':
		echo"<select style='width: 200px;'>
				<option>Lunes</option>
			
		     </select>";
		break;
	case '2':
		echo"<select style='width: 200px;'>
				<option>Martes</option>
			
		     </select>";
		break;
	case '3':
		echo"<select style='width: 200px;'>
				<option>Miercoles</option>
			
		     </select>";
		break;
	case '4':
		echo"<select style='width: 200px;'>
				<option>Jueves</option>
			
		     </select>";
		break;
	case '5':
		echo"<select style='width: 200px;'>
				<option>Viernes</option>
			
		     </select>";
		break;
	case '6':
		echo"<select style='width: 200px;'>
				<option>Sabado</option>
			
		     </select>";
		break;
	case '7':
		echo"<select style='width: 200px;'>
				<option>Domingo</option>
			
		     </select>";
		break;
	
	default:
		echo "no existe el dia";
		break;
}
 ?>