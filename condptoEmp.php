<?php
   include('session.php');
	
	$id=$_SESSION['id'];
	// $nEmp=$_REQUEST['cEmp'];

	$sql= "select first_name, last_name, dept_name, from_date, to_date from employees, departments, dept_emp 
				where employees.emp_no=$id 
					and dept_emp.emp_no=employees.emp_no 
						and departments.dept_no=dept_emp.dept_no
							order by to_date;";


	$resultado = mysqli_query($db, $sql);
	
	echo "<h2>Consulta Departamento</h2>";
	
	if (mysqli_num_rows($resultado) > 0) {
		echo "<table border=1>";
		echo "<tr align='center'>";
			echo "<td>Nombre</td>";
			echo "<td>Departamento</td>";
			echo "<td>Desde</td>";
			echo "<td>Hasta</td>";
		echo "</tr>";
		while ($fila = mysqli_fetch_assoc($resultado)) {
			echo "<tr>";
			echo "<td>".$fila['first_name']." ".$fila['last_name']."</td>"; 
			echo "<td>".$fila['dept_name']."</td>"; 
			echo "<td>".$fila['from_date']."</td>"; 
			echo "<td>".$fila['to_date']."</td>"; 
			echo "</tr>";
		}
	}
	
	echo "<input type='button' value='Atras' onclick='history.back()'><br>";
	echo "<br>";
  
?>