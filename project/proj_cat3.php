<html>

<body>

<body background="bg2.jpg">
<a href = "proj_main.php" > <p align="right" >Home <img src="home.png" width='25px' height='25px'></p>  </a>
<h1><marquee bgcolor="white"><font  color="blue">KIDS' CLOTHING</font></marquee></h1>

<center>
<form action="<?php $_PHP_SELF ?>" method="post">
<input type="checkbox" name="k1"><img src="k1.jpg" width="200px" height="200px" />Rs 200</input> <br/>
<input type="checkbox" name="k2"><img src="k2.jpg" width="200px" height="200px" />Rs 500</input> <br/>
<input type="checkbox" name="k3"><img src="k3.jpg" width="200px" height="200px" />Rs 900</input> <br/>
<input type="checkbox" name="k4"><img src="k4.jpg" width="200px" height="200px" />Rs 800</input> <br/>
<input type="checkbox" name="k5"><img src="k5.jpg" width="200px" height="200px" />Rs 900</input> <br/>
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
if(isSet($_POST['k1']))
	 mysqli_query($conn , "update items set k1='1' where EMAIL='$email';" );
if(isSet($_POST['k2']))
	 mysqli_query($conn , "update items set k2='1' where EMAIL='$email';" );
if(isSet($_POST['k3']))
	 mysqli_query($conn , "update items set k3='1' where EMAIL='$email';" );
if(isSet($_POST['k4']))
	 mysqli_query($conn , "update items set k4='1' where EMAIL='$email';" );
if(isSet($_POST['k5']))
	 mysqli_query($conn , "update items set k5='1' where EMAIL='$email';" );
 
header("location:proj_cart.php");
}
?>

</body>

</html>