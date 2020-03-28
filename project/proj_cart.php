<html>
<head>
<title> CART </title>
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
	
	$row1=mysqli_fetch_assoc(mysqli_query($conn, "select w1 from items where EMAIL='$email'" ));
	if($row1['w1']==1)
	{ echo "<img src='w1.jpg' width='200px' height='200px' />"; }
    
	$row2=mysqli_fetch_assoc(mysqli_query($conn, "select w2 from items where EMAIL='$email'" ));
	if($row2['w2']==1)
	{ echo "<img src='w2.jpg' width='200px' height='200px' />"; }

    $row3=mysqli_fetch_assoc(mysqli_query($conn, "select w3 from items where EMAIL='$email'" ));
	if($row3['w3']==1)
	{ echo "<img src='w3.jpg' width='200px' height='200px' />"; }

    $row4=mysqli_fetch_assoc(mysqli_query($conn, "select w4 from items where EMAIL='$email'" ));
	if($row4['w4']==1)
	{ echo "<img src='w4.jpg' width='200px' height='200px' />"; }

    $row5=mysqli_fetch_assoc(mysqli_query($conn, "select w5 from items where EMAIL='$email'" ));
	if($row5['w5']==1)
	{ echo "<img src='w5.jpg' width='200px' height='200px' />"; }

    $row6=mysqli_fetch_assoc(mysqli_query($conn, "select m1 from items where EMAIL='$email'" ));
	if($row6['m1']==1)
	echo "<img src='m1.jpg' width='200px' height='200px' />";
    
	$row7=mysqli_fetch_assoc(mysqli_query($conn, "select m2 from items where EMAIL='$email'" ));
	if($row7['m2']==1)
	echo "<img src='m2.jpg' width='200px' height='200px' />";

    $row8=mysqli_fetch_assoc(mysqli_query($conn, "select m3 from items where EMAIL='$email'" ));
	if($row8['m3']==1)
	echo "<img src='m3.jpg' width='200px' height='200px' />";

    $row9=mysqli_fetch_assoc(mysqli_query($conn, "select m4 from items where EMAIL='$email'" ));
	if($row9['m4']==1)
	echo "<img src='m4.jpg' width='200px' height='200px' />";

    $row10=mysqli_fetch_assoc(mysqli_query($conn, "select m5 from items where EMAIL='$email'" ));
	if($row10['m5']==1)
	echo "<img src='m5.jpg' width='200px' height='200px' />";
   
    $row11=mysqli_fetch_assoc(mysqli_query($conn, "select k1 from items where EMAIL='$email'" ));
	if($row11['k1']==1)
	echo "<img src='k1.jpg' width='200px' height='200px' />";
    
	$row12=mysqli_fetch_assoc(mysqli_query($conn, "select k2 from items where EMAIL='$email'" ));
	if($row12['k2']==1)
	echo "<img src='k2.jpg' width='200px' height='200px' />";

    $row13=mysqli_fetch_assoc(mysqli_query($conn, "select k3 from items where EMAIL='$email'" ));
	if($row13['k3']==1)
	echo "<img src='k3.jpg' width='200px' height='200px' />";

    $row14=mysqli_fetch_assoc(mysqli_query($conn, "select k4 from items where EMAIL='$email'" ));
	if($row14['k4']==1)
	echo "<img src='k4.jpg' width='200px' height='200px' />";

    $row15=mysqli_fetch_assoc(mysqli_query($conn, "select k5 from items where EMAIL='$email'" ));
	if($row15['k5']==1)
	echo "<img src='k5.jpg' width='200px' height='200px' />";

    $row16=mysqli_fetch_assoc(mysqli_query($conn, "select ms1 from items where EMAIL='$email'" ));
	if($row16['ms1']==1)
	echo "<img src='ms1.jpg' width='200px' height='200px' />";
    
	$row17=mysqli_fetch_assoc(mysqli_query($conn, "select ms2 from items where EMAIL='$email'" ));
	if($row17['ms2']==1)
	echo "<img src='ms2.jpg' width='200px' height='200px' />";

    $row18=mysqli_fetch_assoc(mysqli_query($conn, "select ms3 from items where EMAIL='$email'" ));
	if($row18['ms3']==1)
	echo "<img src='ms3.jpg' width='200px' height='200px' />";

    $row19=mysqli_fetch_assoc(mysqli_query($conn, "select ms4 from items where EMAIL='$email'" ));
	if($row19['ms4']==1)
	echo "<img src='ms4.jpg' width='200px' height='200px' />";

    $row20=mysqli_fetch_assoc(mysqli_query($conn, "select ms5 from items where EMAIL='$email'" ));
	if($row20['ms5']==1)
	echo "<img src='ms5.jpg' width='200px' height='200px' />";

    $row21=mysqli_fetch_assoc(mysqli_query($conn, "select ws1 from items where EMAIL='$email'" ));
	if($row21['ws1']==1)
	echo "<img src='ws1.jpg' width='200px' height='200px' />";
    
	$row22=mysqli_fetch_assoc(mysqli_query($conn, "select ws2 from items where EMAIL='$email'" ));
	if($row22['ws2']==1)
	echo "<img src='ws2.jpg' width='200px' height='200px' />";

    $row23=mysqli_fetch_assoc(mysqli_query($conn, "select ws3 from items where EMAIL='$email'" ));
	if($row23['ws3']==1)
	echo "<img src='ws3.jpg' width='200px' height='200px' />";

    $row24=mysqli_fetch_assoc(mysqli_query($conn, "select ws4 from items where EMAIL='$email'" ));
	if($row24['ws4']==1)
	echo "<img src='ws4.jpg' width='200px' height='200px' />";

    $row25=mysqli_fetch_assoc(mysqli_query($conn, "select ws5 from items where EMAIL='$email'" ));
	if($row25['ws5']==1)
	echo "<img src='ws5.jpg' width='200px' height='200px' />";





?>

</html>