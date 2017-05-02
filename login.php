<?php

	session_start();

	$error="";

	if ( isset ( $_POST['submit'] ) ){

		if( empty($_POST['uname']) || empty($_POST['upwd']) ){

			$error = "Username or password is invalid!";

			echo $error;

		}

		else{
			$flag = 0;

			$un = $_POST['uname'];
			$pwd = $_POST['upwd'];


			$checkun = str_split($un);


			$checkpwd = str_split($pwd);


			foreach( $checkun as $char){

				if( ctype_upper($char) ){
					
					$flag=1;

					break;

				}

			}
			




			if( $flag==0 ){
			foreach( $checkpwd as $char){

				if( ctype_upper($char) ){
					
					$flag=1;

					break;

				}

			}
			}


			if( $flag == 1){

				echo "Username or Password incorrect!";

			}


			if( $flag == 0 ){

	
					$conn = mysqli_connect("localhost","root","");

			
					//$un = trim($un);

					//$pwd = trim($pwd);

					//$un = mysql_real_escape_string($un);
					//$pwd = mysql_real_escape_string($pwd);

					$db = mysqli_select_db($conn,"Blog");



					$query = mysqli_query( $conn,"Select * from login where pwd='$pwd' and un='$un'");
	
					if( mysqli_num_rows($query) == 0 ){

				
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


	}

?>
