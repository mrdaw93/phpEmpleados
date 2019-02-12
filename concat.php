<?php
   include('session.php');
	
	echo "<h2>Consulta Categoria</h2>";
	
	$id=$_SESSION['id'];
	

	$sql= "select first_name, last_name, title, from_date, to_date from employees, titles
				where employees.emp_no=$id 
					and titles.emp_no=employees.emp_no order by from_date;";


	$resultado = mysqli_query($db, $sql);
	
	
	
	if (mysqli_num_rows($resultado) > 0) {
		echo "<table border=1>";
		echo "<tr align='center'>";
			echo "<td>Nombre</td>";
			echo "<td>Categoria</td>";
			echo "<td>Desde</td>";
			echo "<td>Hasta</td>";
		echo "</tr>";
		while ($fila = mysqli_fetch_assoc($resultado)) {
			echo "<tr>";
			echo "<td>".$fila['first_name']." ".$fila['last_name']."</td>"; 
			echo "<td>".$fila['title']."</td>"; 
			echo "<td>".$fila['from_date']."</td>"; 
			echo "<td>".$fila['to_date']."</td>"; 
			echo "</tr>";
		}
	}
	

  
?>