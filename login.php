<?php

if(session_id() == '' || !isset($_SESSION)) {session_start();}
$con=mysqli_connect('localhost','root','','food_delivery');
if(isset($_POST['submitbtn'])) {
	$username=$_POST['uname'];
	$password=$_POST['psw'];
	
	$cmd = 'SELECT id FROM user WHERE uname="'.$username.'" AND pass="'.$password.'"';

	$result=mysqli_query($con,$cmd);
	
	if(mysqli_num_rows($result)){
		echo 'Successful Login';
		header("Location: orders.html");
		$name=mysqli_fetch_array($result);
		$name=$name['id'];
		$_SESSION['user']=$name;
	}else{
		header("Locationn: WEB PROJECT.html");
		echo 'Invalid Username or Password';
	}
}else{
	echo 'Error Login';
}
?>