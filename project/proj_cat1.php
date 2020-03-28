<html>
<head>
<title> WOMEN </title>
</head>


<body background="bg2.jpg">
<a href = "proj_main.php" > <p align="right" >Home <img src="home.png" width='25px' height='25px'></p>  </a>
<h1><marquee bgcolor="white"><font  color="blue">WOMEN'S CLOTHING</font></marquee></h1>

<center>
<form action="<?php $_PHP_SELF ?>" method="post">
<input type="checkbox" name="w1"><img src="w1.jpg" width="200px" height="200px" /> Rs 1,000</input> <br/>
<input type="checkbox" name="w2"><img src="w2.jpg" width="200px" height="200px" /> Rs 5,000</input> <br/>
<input type="checkbox" name="w3"><img src="w3.jpg" width="200px" height="200px" />Rs 1,100</input> <br/>
<input type="checkbox" name="w4"><img src="w4.jpg" width="200px" height="200px" />Rs 9,99</input> <br/>
<input type="checkbox" name="w5"><img src="w5.jpg" width="200px" height="200px" />Rs 4,999</input> <br/>
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
if(isSet($_POST['w1']))
	 mysqli_query($conn , "update items set w1='1' where EMAIL='$email';" );
if(isSet($_POST['w2']))
	 mysqli_query($conn , "update items set w2='1' where EMAIL='$email';" );
if(isSet($_POST['w3']))
	 mysqli_query($conn , "update items set w3='1' where EMAIL='$email';" );
if(isSet($_POST['w4']))
	 mysqli_query($conn , "update items set w4='1' where EMAIL='$email';" );
if(isSet($_POST['w5']))
	 mysqli_query($conn , "update items set w5='1' where EMAIL='$email';" );
 
header("location:proj_cart.php");
}
?>
</body>

</html>