<?php
   include('session.php');
  // echo  $_SESSION["login_user"];
  
  
	// $un=$_SESSION['login_user'];

	// $pwd=$_SESSION['pwd']; 
	
	// echo $un; 
	// echo "<br>"; 
	// echo $pwd; 
	
	// $sql= "select id from admin where username='$un' and passcode='$pwd'";


	// $resultado = mysqli_query($db, $sql);
	
	// if (mysqli_num_rows($resultado) > 0) {
		// while ($fila = mysqli_fetch_assoc($resultado)) {
		// $_SESSION['session_id']= $fila['id']; 
		// }
	// }
	
	
	// $id=$_SESSION['session_id'];
	
	
	// $sql= "select title from titles where emp_no=$id";

	// $resultado = mysqli_query($db, $sql);
	
	// if (mysqli_num_rows($resultado) > 0) {
		// while ($fila = mysqli_fetch_assoc($resultado)) {
		// $title=$fila['title']; 
		// }
	// }
	 // echo $un; 
	 // echo "<br>"; 
	 // echo $id; 
	 // echo "<br>"; 
	// echo $title;
	// echo "<br>"; 
  
  
  
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
	  
	  
	  <nav class="dropdownmenu">
   <ul>
    <li><a href="condptoEmp.php">Consultar Departamento</a></li>    
    <li><a href="consalEmp.php">Consultar Salario</a></li>    
    <li><a href="concatEmp.php">Consultar Categoria</a></li>    
  </ul>
</nav>
	  
	  
	  
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>