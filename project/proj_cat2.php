<html>
<head>
<title> MEN </title>
</head>
<body background="bg2.jpg">

<body background="bg2.jpg">
<a href = "proj_main.php" > <p align="right" >Home <img src="home.png" width='25px' height='25px'></p>  </a>
<h1><marquee bgcolor="white"><font  color="blue">MEN'S CLOTHING</font></marquee></h1>

<center>
<form action="<?php $_PHP_SELF ?>" method="post">
<input type="checkbox" name="m1"><img src="m1.jpg" width="200px" height="200px" /> Rs 999</input> <br/>
<input type="checkbox" name="m2"><img src="m2.jpg" width="200px" height="200px" />Rs 800</input> <br/>
<input type="checkbox" name="m3"><img src="m3.jpg" width="200px" height="200px" />Rs 400</input> <br/>
<input type="checkbox" name="m4"><img src="m4.jpg" width="200px" height="200px" />Rs 2.00</input> <br/>
<input type="checkbox" name="m5"><img src="m5.jpg" width="200px" height="200px" />Rs 1,000</input> <br/>
<input type="submit" name="submit" value="Add to cart" />
</form>
</center>
<?php 
session_start();
$email=$_SESSION['value'];

$conn = mysqli_connect('localhost','root','','project');
	if(!$conn)
		die(mysqli_error($conn));
if(isSet($_POST['submit']))
{
if(isSet($_POST['m1']))
	 mysqli_query($conn , "update items set m1='1' where EMAIL='$email';" );
if(isSet($_POST['m2']))
	 mysqli_query($conn , "update items set m2='1' where EMAIL='$email';" );
if(isSet($_POST['m3']))
	 mysqli_query($conn , "update items set m3='1' where EMAIL='$email';" );
if(isSet($_POST['m4']))
	 mysqli_query($conn , "update items set m4='1' where EMAIL='$email';" );
if(isSet($_POST['m5']))
	 mysqli_query($conn , "update items set m5='1' where EMAIL='$email';" );
 
header("location:proj_cart.php");
}
?>

</body>

</html>