<?php
   include('session.php');
  // echo  $_SESSION["login_user"];
  
  
	// $un=$_SESSION['login_user'];
	
	
	// $sql= "select id from admin where username='$un'";


	// $resultado = mysqli_query($db, $sql);
	
	// if (mysqli_num_rows($resultado) > 0) {
		// while ($fila = mysqli_fetch_assoc($resultado)) {
		// // //$id=$fila['id'];
		// // $cookie_value = $fila['id'];
		// // setcookie('cookie_id', $cookie_value, time() + (86400 * 30), "/"); // 86400 segundos = 1 día
		// $_SESSION['session_id']= $fila['id']; 
		// }
	// }
	
	//echo $_COOKIE['cookie_id']; 
	//echo $_SESSION['session_id']; 

  
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $login_session; ?> (manager)</h1> 
	  
	  
	  <nav class="dropdownmenu">
  <ul>
    <li><a href="cambiodpto.php">Cambiar Departamento</a></li>
    <li><a href="cambiosal.php">Modificar Salario</a>
    <li><a href="cambiocat.php">Modificar Categoria</a></li>
    <li><a href="condpto.php">Consultar Departamento</a></li>    
    <li><a href="consal.php">Consultar  Salario</a></li>    
    <li><a href="concat.php">Consultar Categoria</a></li>    
  </ul>
  
</nav>
	  
	  
	  
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>