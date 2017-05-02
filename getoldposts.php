<html>
<body>

<?php

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

		echo "<textarea rows='2' cols='50' readonly>".$row['Content']."</textarea><br><br>";

	}
	
	mysqli_close($con);

?>



</body>

</html>
