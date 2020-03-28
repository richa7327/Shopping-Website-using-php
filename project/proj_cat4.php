<html>

<body>
<body background="bg2.jpg">
<a href = "proj_main.php" > <p align="right" >Home <img src="home.png" width='25px' height='25px'></p>  </a>
<h1><marquee bgcolor="white"><font  color="blue">MEN'S FOOTWEAR</font></marquee></h1>

<center>
<form action="<?php $_PHP_SELF ?>" method="post">
<input type="checkbox" name="ms1"><img src="ms1.jpg" width="200px" height="200px" />Rs 1,000</input> <br/>
<input type="checkbox" name="ms2"><img src="ms2.jpg" width="200px" height="200px" />Rs 1,200</input> <br/>
<input type="checkbox" name="ms3"><img src="ms3.jpg" width="200px" height="200px" />Rs 1,100</input> <br/>
<input type="checkbox" name="ms4"><img src="ms4.jpg" width="200px" height="200px" />Rs 999</input> <br/>
<input type="checkbox" name="ms5"><img src="ms5.jpg" width="200px" height="200px" />Rs 1,500</input> <br/>
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
if(isSet($_POST['ms1']))
	 mysqli_query($conn , "update items set ms1='1' where EMAIL='$email';" );
if(isSet($_POST['ms2']))
	 mysqli_query($conn , "update items set ms2='1' where EMAIL='$email';" );
if(isSet($_POST['ms3']))
	 mysqli_query($conn , "update items set ms3='1' where EMAIL='$email';" );
if(isSet($_POST['ms4']))
	 mysqli_query($conn , "update items set ms4='1' where EMAIL='$email';" );
if(isSet($_POST['ms5']))
	 mysqli_query($conn , "update items set ms5='1' where EMAIL='$email';" );
 
header("location:proj_cart.php");
}
?>

</body>

</html>