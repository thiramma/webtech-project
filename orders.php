<html>
<head>
<link rel="stylesheet" href="orders.css">
<title>ordersphp</title>
<style>
div.entries{
    border: 1px solid #888;
	height: 50%;
    width: 25%;
    background-color:white;
    padding:10px;
    margin:0 auto;
    margin-top:100px;
    text-align:center;
	letter-spacing:2px;
	overflow-x:hidden;
	overflow-y:auto;
}

</style>
</head>
<body>
<form method="post">
<div style="position:fixed;top:0;background-color: grey;width:100%; text-align: center;color: white;"> 
<h2>Your Orders</h2>
</div>
<div class="entries">
<h3 style="letter-spacing:2px;">Total Summary: </h3>
<?php
    foreach ($_POST as $drink=>$rate)
    {
        if($drink=="submit")
        {
            continue;
        }
        echo '<center><div>'.$drink=str_replace('_',' ',$drink).': <b>'.$rate.'</b></div></center>';
    }
?>
</div>
<br><br>

<div class="box">
<center><a class="button" href="#popup1">Confirm My Order</a></center>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Confirmation</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			Your order has been confirmed. Thank you.<br>
		</div>
		<br><br><center><a class="button" href="logout.php">Logout</a></center>
	</div>
</div>	

</div>
</form>
</body>
</html>
