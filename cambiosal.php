<?php
   include('session.php');
	
	echo "<h2>Cambio Salario</h2>";
	
	//$id=$_SESSION['id'];
	

	

	echo "<form name='mi_formulario' action='cambiosal1.php' method='post'>";
	
	echo "Codigo de Empleado <input type='text' name='cEmp' value='' size=8><br><br>";
	
	echo "Nuevo Salario <input type='text' name='nSal' value='' size=8><br><br>";
	


	
	echo "<input type='submit' value='Enviar'>";
	echo "</form>";
	
	
	
	
	
	
	
	
	


  
?>