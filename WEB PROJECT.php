<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Times New Roman", Georgia, Serif;
    font-size: 18px;
    line-height: 1.5;
	}
	
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
  text-align: center;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 15px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


/* Center the image */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 25%;
  border-radius: 50%;
}

.container {
  padding: 50px;
}

/* Modal Content Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}


.nav {
  background-color: white;
  overflow: hidden;
  z-index: 9999;
  position: fixed;
  top:0;
  margin:0px;
}

.nav a {
  float: left;
  color: black;
  text-align: center;
  padding: 15px 97px;
  text-decoration: none;
  font-size: 17px;
  overflow: hidden;
}

.nav a:hover {
  background-color: gray;
  color: white;
}

.active {
  background-color: #4CAF50;
 } 
 
 
</style>
</head>


<body>
<!-- Navbar (sit on top) -->
<div class="nav">
  <div style="letter-spacing:4px;">
    <a href="home.html">The Cafe</a>
      <a href="home.html#about">About</a>
      <a href="diamond.html">Signup</a>
	  <a class="active" href="WEB PROJECT.php">Login</a>
      <a href="home.html#contact">Contact</a>
  </div>
</div>

<script>
function validation()
{	if(form2.uname.value=="")
	{
		alert("Please enter name");
		form2.uname.focus();
		return false;
	}
	if(form2.psw.value=="")
	{
		alert("Please enter password");
		form2.psw.focus();
		return false;
	}
}

</script>

 
 <?php

if(session_id() == '' || !isset($_SESSION)) {session_start();}
$con=mysqli_connect('localhost','root','','food_delivery');
if(isset($_POST['submitbtn'])) {
	$username=$_POST['uname'];
	$password=$_POST['psw'];
	
	$cmd = 'SELECT id FROM test WHERE uname="'.$username.'" AND pass="'.$password.'"';

	$result=mysqli_query($con,$cmd);
	
	if(mysqli_num_rows($result)){
		echo 'Successful Login';
		header("Location: orders.html");
		$name=mysqli_fetch_array($result);
		$name=$name['id'];
		$_SESSION['user']=$name; 
	}else{
		//header("Locationn: WEB PROJECT.html");
		echo '<script>alert("Invalid");</script>';
	}
}//else{
	//echo 'Error Login';
//} 


echo '<div class="modal-content">
	<form name="form2" method="post" >
	<h1>Welcome Back!</h1>
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">
	<br>
	<label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
       <br><br> 
     <button type="submit" value="Login" name="submitbtn" onclick="return validation()">Login</button>

  </div>
 </form>
 </div>';
?>
</body>
</html>

