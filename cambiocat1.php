<?php
	
	include('session.php');
	
	$nEmp=$_REQUEST['cEmp'];
	$categoria=$_REQUEST['cat']; 
	$hoy=date("Y-m-d");
	
	

	updateCat($db, $nEmp, $hoy);
	insertCat($db, $nEmp, $categoria, $hoy);
	
	
	
	
	
	
	//UPDATE EN LA TABLA CATEGORIA
	function updateCat($db, $nEmp, $hoy){
	
		$toDate="9999-01-01";
		$sql="update titles set to_date='$hoy' where to_date='$toDate' and emp_no=$nEmp";
				
				
		if (mysqli_query($db, $sql)) {
		echo " update FCategoria correctamente<br>";
		} else {
		echo "Error update: " . mysqli_error($db);
		}
	
	
	}
	
	
	
	
	
	//INSERT EN LA TABLA CATEGORIA
	function insertCat($db, $nEmp, $categoria, $hoy){
	
		$toDate="9999-01-01";
		$sql="insert into titles values($nEmp, '$categoria', '$hoy', '$toDate') ";
				
				
		if (mysqli_query($db, $sql)) {
		echo " insert title correctamente<br>";
		} else {
		echo "Error insert: " . mysqli_error($db);
		}
	
	
	}
	
	
	
	
	
	
?>