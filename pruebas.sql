  -- session_start();
   
   -- if($_SERVER["REQUEST_METHOD"] == "POST") {
   
     
      
      -- $myusername = mysqli_real_escape_string($db,$_POST['username']);
      -- $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
	  
      -- $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      -- $result = mysqli_query($db,$sql);
	  
     -- // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	 
      -- if (mysqli_num_rows($result) > 0) {
		-- while ($fila = mysqli_fetch_assoc($resultado)) {
		-- $id=$fila['id']; 
		-- }
	-- }

      
	  
	-- $sql2= "select dept_no from dept_manager where emp_no=$id";

	-- $resultado2 = mysqli_query($db, $sql2);
	
	-- $jefe=false;
	
	-- if (mysqli_num_rows($resultado2) > 0) {
		-- while ($fila = mysqli_fetch_assoc($resultado)) {
			-- if($fila['id']!=null)
				-- $jefe=true; 
		-- }
	-- }
	  
	 -- // isset
	  
	
	 -- $count = mysqli_num_rows($result);
		
		-- if($count==1){
			-- if( $jefe==true) {
				-- $_SESSION['login_user'] = $myusername; 
				-- $_SESSION['pwd'] = $mypassword; 
				-- header("location: welcome.php");
			-- }
			-- else {
				-- //if($jefe==false){
				-- $_SESSION['login_user'] = $myusername; 
				-- $_SESSION['pwd'] = $mypassword; 
				-- header("location: welcome2.php");
				-- }
			-- //} 
		
		-- }else {
			-- $error = "Your Login Name or Password is invalid";
		-- }
		
		
	   -- // if($count == 1) {
         
        -- // $_SESSION['login_user'] = $myusername; 
		-- // $_SESSION['pwd'] = $mypassword; 
         -- // header("location: welcome2.php");
		
      -- // }else {
         -- // $error = "Your Login Name or Password is invalid";
      -- // }
	  

	  
	 select first_name, last_name, dept_name from employees, departments, dept_emp 
		where employees.emp_no=110039 
			and dept_emp.emp_no=employees.emp_no 
				and departments.dept_no=dept_emp.dept_no;
	  
	  
	  
	  
	  
	  
	  select * from salaries where to_date=(select max(to_date) from salaries) and emp_no=10002
	  
	  
	  
