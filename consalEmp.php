<?php
   include('session.php');
	
	echo "<h2>Consulta Salario</h2>";

	
	
	$id=$_SESSION['id'];
	
	
	
	$sql= "select salary, from_date, to_date from salaries where emp_no=$id order by to_date ";


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

	
	echo "<input type='button' value='Atras' onclick='history.back()'><br>";
	echo "<br>";
	
?>