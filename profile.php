<?php

	include('session.php');


	if( isset ( $_SESSION['login_user']) ){

?>

<html>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>

		body{

			font-family: 'Roboto', sans-serif;

		}	


		#data{

			font-family: 'Roboto', sans-serif;

			padding:100 500 100 500;

			margin:40 190 40 190;

			border-style:groove;	

			border-color:skyblue;

			border-width:7px;

		}


		 #submit{

			font-family: 'Roboto', sans-serif;

			    background-color: #4CAF50;
			    border: none;
			    color: white;
			    
			    margin:10 700 50 700;

			    padding:12px 20px;

			    text-decoration: none;
			   
			    cursor: pointer;


			border-radius:20px;

		}

		ul {

		    position:fixed;
		    width:99%;
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #333;
		    border-style:groove;
		    border-color:#333;

		}

		li {
		    float: left;
		}

		li a {
		    display: block;
		    color:#4CAF50 ;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		    background-color:#e6fff7;	
		}

		



	</style>


<body>

	<ul>

		<!--<li><b id="welcome"> Welcome : <i> <?php echo $login_session;  ?></i> </b></li>-->
		<li></li>

		<li  style="float:right"><b id="logout"><a href="logout.php"> Logout </a></b></li>

	</ul>

<?php



	$un = "root";
	$pwd="";
	$db="Blog";

	$con = mysqli_connect('localhost',$un,$pwd,$db);
	
	if($con == true )echo "<br>";
	
	mysqli_select_db($con,"Posts");	

	$first = "Update `Posts` Set `visited`=0";

	mysqli_query($con,$first);

	$query  = "SELECT * from `Posts` Where No <= 5";

	$q = "UPDATE `Posts` SET `visited`=1 WHERE No<=5";

	$result = mysqli_query($con,$query);

	mysqli_query($con,$q);

	while( $row = mysqli_fetch_array($result) ){

		echo "<textarea id ='data' rows='2' cols='50' readonly>".$row['Content']."</textarea><br><br>";

	}
	
	mysqli_close($con);

?>

	<div id="Posts">

	<div id="Oldposts"></div> 


	</div>
	
	<br><br>

	<button type="button" id ="submit" onClick="myFunction()">SEE NEXT 5 POSTS</button	>	
	


	
	<script>

		function myFunction(){

			//document.getElementById("here").innerHTML="You clicked me!";
		

			if(window.XMLHttpRequest){

				xmlhttp = new XMLHttpRequest(); // for modern browsers!
		
			}

			else{

				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			
			}

			
			xmlhttp.onreadystatechange = function(){

				
				if(this.readyState ==4 &&  this.status == 200){


					document.getElementById("Oldposts").innerHTML = this.responseText;
	
					document.getElementById("Oldposts").id = "Newone";			

					var div = document.createElement("div");

					div.setAttribute("id","Oldposts");

					var posts = document.getElementById("Posts");

					posts.appendChild(div);

				}

			};


			xmlhttp.open("GET","getoldposts.php",true);

			xmlhttp.send();



			//document.getElementById("Oldposts").id = "Newone";


		}

	</script>



</body>

</html>
<?php } 


	else{

		header("location:login_home.php");

		echo "<p>Please Login to Enter</p>";

	}

?>
