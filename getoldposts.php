<html>
<body>

<?php
	include('session.php');


	if( isset ( $_SESSION['login_user']) ){

	$un = "root";
	$pwd="";
	$db="Blog";

	$con = mysqli_connect('localhost',$un,$pwd,$db);
	
	if($con == true )echo "<br>";
	
	mysqli_select_db($con,"Posts");	

	$query  = "SELECT * from `Posts` Where visited = 0 limit 5";

		$q = "UPDATE `Posts` SET `visited`=1 WHERE visited=0 limit 5";

	$result = mysqli_query($con,$query);

	mysqli_query($con,$q);


	while( $row = mysqli_fetch_array($result) ){

	//echo "<form name='submit_data' method='post' action='updateposts.php' >";

			echo "<textarea id ='data' class='$_SESSION[POST_NO]' rows='2' cols='50' name='$_SESSION[POST_NO]' readonly>".$row['Content']."</textarea><br><div id='button'> <button id='but2' class='$_SESSION[POST_NO]' onClick='submit(this);' disabled >submit</button> <button id='but' class='$_SESSION[POST_NO]' onClick='makeeditable(this);' >edit</button></div><br>";


		$_SESSION['POST_NO'] = $_SESSION['POST_NO'] + 1;

	//echo "</form>";

	}
	
	mysqli_close($con);

}
?>



</body>

</html>
