<?php
   include('session.php');
	
	echo "<h2>Cambio Departamento</h2>";
	
	//$id=$_SESSION['id'];
	

	

	echo "<form name='mi_formulario' action='cambiodpto1.php' method='post'>";
	
	echo "Codigo de Empleado <input type='text' name='cEmp' value='' size=8><br><br>";
	
	
	

	$sql="select dept_name  from departments";
	$resultado1 = mysqli_query($db, $sql);
		
		
	if (mysqli_num_rows($resultado1) > 0) {
		echo "Departamento"; 
		echo "<select name='dept'>";	
		while ($fila = mysqli_fetch_assoc($resultado1)) {
			echo "<option>".$fila["dept_name"]."</option>";	
		}
		echo "</select>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		
	}
	else {
		echo "No existen departamentos";
	}				
	
	
	echo "<input type='submit' value='Enviar'>";
	echo "</form>";
	
	
	
	
	
	
	
	
	


  
?>