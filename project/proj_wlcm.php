<html>
<head>
<title> login </title>
</head>

<body bgcolor="tan">
<center>
<h1> <b> <i> <marquee> Welcome to RichAditi SWAG (Shopping Wished Apparels Guaranteed) </marquee> </i> </b> </h1>
<?php

$name=$_POST["name"];
echo "<h3>Name : $name <br/> </h3>";

$username=$_POST["username"];
echo "<h3>Username : $username <br/> </h3>";

$add=$_POST["address"];
echo "<h3> Address : $add <br/> </h3>";

$phn=$_POST["phone"];
echo "<h3> Phone No. :  $phn <br/></h3>";

$gend=$_POST["gender"];
if($gend=="m") 
	echo "<h3> GENDER : Male </h3> <br/>"; 
else echo "<h3> Gender : Female <br/></h3>";

?>
<form action="proj_main.php " method="POST">
<input type="submit" name="submit" value="HOME"> </input>
</form>
</center>
 </body>
</html>