<?php

	include('login.php');

	
	if ( isset ( $_SESSION['login_user'] ) ){


		//if session is set then we can redirect to prrofile page

		header("location:profile.php");
		

	}


?>
<html>
<body>


<br><br>

	<form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">



		<label>Username:</label>

		<input type="text" name="uname" placeholder="enter the username"></input><br>

		<label>Password:</label>

		<input type="password" name="upwd" placeholder= "enter your password"></input><br><br>

		<input name="submit" type="submit" value="login" > </input>


	</form>

</body>
</html>
