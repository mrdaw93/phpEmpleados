<?php
	
	include('session.php');
	
	$nEmp=$_REQUEST['cEmp'];
	$salario=$_REQUEST['nSal']; 
	$hoy=date("Y-m-d");
	
	

	updateSal($db, $nEmp, $hoy);
	insertSal($db, $nEmp, $salario, $hoy);

	

	
	//UPDATE EN LA TABLA SALARIES
	function updateSal($db, $nEmp, $hoy){
	
		$toDate="9999-01-01";
		$sql="update salaries set to_date='$hoy' where to_date='$toDate' and emp_no=$nEmp";
				
				
		if (mysqli_query($db, $sql)) {
		echo " update FSalario correctamente<br>";
		} else {
		echo "Error update: " . mysqli_error($db);
		}
	
	
	}
	
	
	
	
	
	//INSERT EN LA TABLA SALARIES
	function insertSal($db, $nEmp, $sal, $hoy){
	
		$toDate="9999-01-01";
		$sql="insert into salaries values($nEmp, '$sal', '$hoy', '$toDate') ";
				
				
		if (mysqli_query($db, $sql)) {
		echo " insert SALARIES correctamente<br>";
		} else {
		echo "Error insert: " . mysqli_error($db);
		}
	
	
	}
	
	
	
	
	
	
?>