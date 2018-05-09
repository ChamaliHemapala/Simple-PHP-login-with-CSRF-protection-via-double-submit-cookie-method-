<?php

	//Session start
	session_start();
	
	// if the user clicked the login button
	if(isset($_POST['login']))
	{
		ob_end_clean();
		//user and token validation
		if($_POST['email']=="chamali@gmail.com" && $_POST['password']=="12345" && $_POST['csrf']== $_COOKIE['csrf'] && $_COOKIE['session_id']==session_id())
		{
			echo "<script> alert('Login Sucess') </script>";
			
			// this is if the user selected the remember me checkbox
			if(isset($_POST['remember']))
			{
					setcookie('email',$_email,time()+60*60*7);  // set a cookie for email
					setcookie('password',$_password,time()+60*60*7); // set a cookie for password
			}
			$_SESSION['email']=$_POST['email'];
			echo "Welcome   "   .$_SESSION['email'];
			echo "<a href='logout.php'> Logout</a>";
			
		}
		else
		{
			
			echo "<script> alert('Login Failed') </script>";
			echo "Login Failed and Authorization Failed :(";
		}
		
		
		
	}
	
		
	
	
?>
