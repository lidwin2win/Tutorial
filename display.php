<html>
<body>

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

		echo "<textarea rows='2' cols='50' readonly>".$row['Content']."</textarea><br><br>";

	}
	
	mysqli_close($con);

?>

	<div id="Posts">

	<div id="Oldposts"></div> 


	</div>
	
	<br><br>

	<button type="button" onClick="myFunction()">SEE NEXT 5 POSTS</button	>	
	


	
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
