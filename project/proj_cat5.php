<html>

<body>

<body background="bg2.jpg">
<a href = "proj_main.php" > <p align="right" >Home <img src="home.png" width='25px' height='25px'></p>  </a>
<h1><marquee bgcolor="white"><font  color="blue">WOMEN'S FOOTWEAR</font></marquee></h1>
<center>
<form action="<?php $_PHP_SELF ?>" method="post">
<input type="checkbox" name="ws1"><img src="ws1.jpg" width="200px" height="200px" />Rs 8,000</input> <br/>
<input type="checkbox" name="ws2"><img src="ws2.jpg" width="200px" height="200px" />Rs 1,000</input> <br/>
<input type="checkbox" name="ws3"><img src="ws3.jpg" width="200px" height="200px" />Rs 1,000</input> <br/>
<input type="checkbox" name="ws4"><img src="ws4.jpg" width="200px" height="200px" />Rs 9,000</input> <br/>
<input type="checkbox" name="ws5"><img src="ws5.jpg" width="200px" height="200px" />Rs 10,000</input> <br/>
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
if(isSet($_POST['ws1']))
	 mysqli_query($conn , "update items set ws1='1' where EMAIL='$email';" );
if(isSet($_POST['ws2']))
	 mysqli_query($conn , "update items set ws2='1' where EMAIL='$email';" );
if(isSet($_POST['ws3']))
	 mysqli_query($conn , "update items set ws3='1' where EMAIL='$email';" );
if(isSet($_POST['ws4']))
	 mysqli_query($conn , "update items set ws4='1' where EMAIL='$email';" );
if(isSet($_POST['ws5']))
	 mysqli_query($conn , "update items set ws5='1' where EMAIL='$email';" );
 
header("location:proj_cart.php");
}
?>

</body>

</html>