<?php
if(session_id() == '' || !isset($_SESSION)) {session_start();}
$con=mysqli_connect('localhost','root','','food_delivery');

if(isset($_POST['btn1'])){

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$psw=$_POST['psw'];

//Database connection
	
		$cmd='insert into test(uname,email,addr,phone,pass) values("'.$name.'", "'.$email.'", "'.$address.'", "'.$phone.'", "'.$psw.'")';
				$result=mysqli_query($con,$cmd);
	if($result) { 	
		echo "Registration successfull...";
		header("Location: WEB PROJECT.php");
		
		//$cmd->close();
		$con->close();
	}
}

?>

