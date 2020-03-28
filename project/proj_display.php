<html>
<head>
<title> USER_INFO </title>
</head>
<a href = "proj_main.php" > <p align="right" >Home <img src="home.png" width='25px' height='25px'></p>  </a>
<br/>
<body background="bgcart1.jpg">
<h1> <marquee bgcolor="white" BEHAVIOR=ALTERNATE> YOUR CART </marquee> </h1> </center>
</body>
<?php 
session_start();
$email=$_SESSION['value'];

$conn = mysqli_connect('localhost','root','','project');
	if(!$conn)
		die(mysqli_error($conn));
