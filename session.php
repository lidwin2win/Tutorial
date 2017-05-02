<?php


	session_start();

	if( isset( $_SESSION['login_user'] ) ){

	$user_check = $_SESSION['login_user'];

	



	$conn = mysqli_connect('localhost','root','');

	$db = mysqli_select_db($conn,"Blog");


	session_start();

	$user_check =  $_SESSION['login_user'];


	$query = "Select un from login where un = '$user_check'";

	$result = mysqli_query($conn,$query);

	$row = mysqli_fetch_assoc($result);

	$login_session =  $row['un'];


/*	if( !isset ($login_session) ){

		mysqli_close($conn);

		header("location:login_home.php");

	}

*/


	}

?>
