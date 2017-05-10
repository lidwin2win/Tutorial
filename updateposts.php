
<?php
	include('session.php');


	if( isset ( $_SESSION['login_user']) ){

	$un = "root";
	$pwd="";
	$db="Blog";

	$con = mysqli_connect('localhost',$un,$pwd,$db);
	
	
	mysqli_select_db($con,"Posts");	

	$row = $_REQUEST['row'];

	$data = $_REQUEST['data'];

	$query = "UPDATE `Posts` SET `Content`='$data' WHERE `No`='$row'";


	$result = mysqli_query($con,$query);

	
	mysqli_close($con);

}
?>


