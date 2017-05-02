<?php

	include('login.php');


	
	if ( isset ( $_SESSION['login_user'] ) ){


		//if session is set then we can redirect to prrofile page

		header("location:profile.php");
		

	}


?>




<html>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<style>

		

		#main{
			
			padding:250 650 250 650;
			
		}
	
		
		body{
	

		}

		#form{

			font-family: 'Roboto', sans-serif;


			border-style:groove;

			border-color:skyblue;

			border-radius:25px;
	
			border-width:7px;

			background-color:#e6fff7;

		}


		#option{
			font-family:'Roboto';

			padding:40 100 40 100;

		}


		input[type=text]{

			font-family: 'Roboto', sans-serif;
			

			padding: 12px 20px;
   		 	margin: 8px 0;

		}


		input[type=text]:focus{

			border : 4px solid #555;

		}


		input[type=password]{
	
			font-family: 'Roboto', sans-serif;
			

			padding: 12px 20px;
   		 	margin: 8px 0;

		}


		input[type=password]:focus{

			border : 4px solid #777;

		}


		 input[type=submit]{

			font-family: 'Roboto', sans-serif;

			    background-color: #4CAF50;
			    border: none;
			    color: white;
			    
			    margin:5 210 10 210;

			    padding:12px 20px;

			    text-decoration: none;
			   
			    cursor: pointer;


			border-radius:20px;

		}

	
		 input[type=submit]:hover{

			border:5px;

		}
		


	</style>


	<body>

		<div id="main">


		<div id ="form">

		<form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


			<div id="option">
			<label>Username:</label>

			<input type="text" name="uname" placeholder="Enter the Username"></input><br>

			</div>

			<div id="option">

			<label>Password:</label>

			<input type="password" name="upwd" placeholder= "Enter your Password"></input><br><br>


			</div>


			<div id="button">

			<input name="submit" type="submit" value="LOGIN" > </input>
	
			</div>

		</form>

		</div>
		

		</div>

	</body>


</html>
