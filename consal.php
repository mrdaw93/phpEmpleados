<?php
   include('session.php');
	
	echo "<h2>Consulta Salario</h2>";

	// $un=$_SESSION['login_user'];
	// $pwd=$_SESSION['pwd']; 
	$id=$_SESSION['id'];
	
	// echo $un; 
	// echo "<br>"; 
	// echo $pwd; 
	
	
	$sql= "select salary, from_date, to_date from salaries where emp_no=$id";


	$resultado = mysqli_query($db, $sql);
	
	
	
	if (mysqli_num_rows($resultado) > 0) {
		echo "<table border=1>";
		echo "<tr align='center'>";
			echo "<td>Salario</td>";
			echo "<td>Desde</td>";
			echo "<td>Hasta</td>";
		echo "</tr>";
		while ($fila = mysqli_fetch_assoc($resultado)) {
			echo "<tr>";
			echo "<td>".$fila['salary']."</td>"; 
			echo "<td>".$fila['from_date']."</td>"; 
			echo "<td>".$fila['to_date']."</td>"; 
			echo "</tr>";
		}
	}
	

  
?>