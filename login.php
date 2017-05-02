<?php

	session_start();

	$error="";

	if ( isset ( $_POST['submit'] ) ){

		if( empty($_POST['uname']) || empty($_POST['upwd']) ){

			$error = "Username or password is invalid!";

			echo $error;

		}

		else{

			$un = $_POST['uname'];
			$pwd = $_POST['upwd'];
	
			$conn = mysqli_connect("localhost","root","");

			
			//$un = mysql_real_escape_string($un);
			//$pwd = mysql_real_escape_string($pwd);

			$db = mysqli_select_db($conn,"Blog");



			$query = mysqli_query( $conn,"Select * from login where pwd='$pwd' and un='$un'");
	
			if( mysqli_num_rows($query) ==0 ){

				
				echo "Username or password is incorrect";

			}

			$rows =  mysqli_num_rows($query);

			


			if( $rows==1 ){


				$_SESSION['login_user'] = $un;
				header("location:profile.php");
			

			}	

			mysqli_close($conn);

		}


	}

?>
