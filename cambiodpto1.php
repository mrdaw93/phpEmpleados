<?php
	
	include('session.php');
	
	$nEmp=$_REQUEST['cEmp'];
	$departamento=$_REQUEST['dept']; 
	$hoy=date("Y-m-d");
	
	//echo $nEmp;
	$cDpto=codigoDept($db, $departamento);
	
	
	$sql = "SELECT * FROM dept_manager WHERE emp_no=$nEmp";
    $result = mysqli_query($db,$sql);
	
	$count= mysqli_num_rows($result);
	
	
	if($count==1){
		updateEmp_dptoM($db, $nEmp, $hoy);
		insertEmp_dptoM($db, $nEmp, $cDpto, $hoy);
	}
	else {
		updateEmp_dptoE($db, $nEmp, $hoy);
		insertEmp_dptoE($db, $nEmp, $cDpto, $hoy);
	}
		
	

	
	

	
	
	
	
	
	
		
	//FUNCION PARA SACAR EL CODIGO DE DEPARTAMENTO 
	function codigoDept($conec, $departamento){
	
		$sql="select dept_no from departments where dept_name='$departamento'";
		$resultado1 = mysqli_query($conec, $sql);
		
		if (mysqli_num_rows($resultado1) > 0) {
			while ($fila = mysqli_fetch_assoc($resultado1)) {
				$cDept=$fila['dept_no']; 
			}
			
		}
		else {
			echo "No existen pedidos";
		}	
		
		return $cDept;

	}
	
	
	
	
	//UPDATE EN LA TABLA DEPT_MANAGER
	function updateEmp_dptoM($db, $nEmp, $hoy){
	
		
		$sql="update dept_manager set to_date='$hoy' where emp_no=$nEmp";
				
				
		if (mysqli_query($db, $sql)) {
		echo " update MANAGER correctamente<br>";
		} else {
		echo "Error update: " . mysqli_error($db);
		}
	
	
	}
	
	
	
	
	
	//INSERT EN LA TABLA DEPT_MANAGER
	function insertEmp_dptoM($db, $nEmp, $cDpto, $hoy){
	
		$toDate="9999-01-01";
		$sql="insert into dept_manager values($nEmp, '$cDpto', '$hoy', '$toDate') ";
				
				
		if (mysqli_query($db, $sql)) {
		echo " insert MANAGER correctamente<br>";
		} else {
		echo "Error insert: " . mysqli_error($db);
		}
	
	
	}
	
	
	
	
		
	//UPDATE EN LA TABLA DEPT_EMP
	function updateEmp_dptoE($db, $nEmp, $hoy){
	
		
		$sql="update dept_emp set to_date='$hoy' where emp_no=$nEmp";
				
				
		if (mysqli_query($db, $sql)) {
		echo " update correctamente<br>";
		} else {
		echo "Error update: " . mysqli_error($db);
		}
	
	
	}
	
	
	//INSERT EN LA TABLA DEPT_EMP
	function insertEmp_dptoE($db, $nEmp, $cDpto, $hoy){
	
		$toDate="9999-01-01";
		$sql="insert into dept_emp values($nEmp, '$cDpto', '$hoy', '$toDate') ";
				
				
		if (mysqli_query($db, $sql)) {
		echo " insert correctamente<br>";
		} else {
		echo "Error insert: " . mysqli_error($db);
		}
	
	
	}
	
	

	
	
	
	
?>