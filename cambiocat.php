<?php
   include('session.php');
	
	echo "<h2>Cambio Categoria</h2>";
	
	//$id=$_SESSION['id'];
	

	

	echo "<form name='mi_formulario' action='cambiocat1.php' method='post'>";
	
	echo "Codigo de Empleado <input type='text' name='cEmp' value='' size=8><br><br>";
	
	
	

	$sql="select title  from titles group by title";
	$resultado1 = mysqli_query($db, $sql);
		
		
	if (mysqli_num_rows($resultado1) > 0) {
		echo "Nueva Categoria"; 
		echo "<select name='cat'>";	
		while ($fila = mysqli_fetch_assoc($resultado1)) {
			echo "<option>".$fila["title"]."</option>";	
		}
		echo "</select>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		
	}
	else {
		echo "Error titles";
	}				
	
	
	echo "<input type='submit' value='Enviar'>";
	echo "</form>";
	
	
	
	
	
	
	
	
	


  
?>