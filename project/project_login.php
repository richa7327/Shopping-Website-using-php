<html>
<head>
<title> LOGIN </title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body background="shop3.jpg">  

<?php
// define variables and set to empty values
$emailErr = $passwordErr= "";
$email = $password ="";

 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty ($_POST["password"])) {
	  $passwordErr = "Password is required";
    } else {
		$password = ($_POST["password"]);
	}
	
 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<b><h1><center><marquee bgcolor="white "BEHAVIOR=ALTERNATE> RichAditi S.W.A.G. (Shopping Wished Apparels Guaranteed) </marquee> </center></h1></b>

<h2>LOGIN PAGE</h2>
<p><span class="error">* required field.</span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  E-mail : <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password : <input type="password" name="password" value="<?php echo $password; ?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  
 <input type="submit" name="submit" value="Submit">  
</form>

------- New to SWAG ? -------
<form action="project_register.php" method="POST">

<input type="submit" value="Register" name="submit1">

</form>

<?php 

$conn = mysqli_connect('localhost','root','','project');
	if(!$conn)
		die(mysqli_error($conn));
	
	
	if(isSet($_POST["submit"]))
	{ 
				 if(isSet($_POST["email"]))
		      	     $emailid=$_POST["email"];
		         if(isSet($_POST["password"]))
			         $password=$_POST["password"];
		    
				
				 session_start();
                 $_SESSION['value']=$emailid;
				 
  				$query="select NAME from login where EMAILID='$emailid' AND PASSWORD='$password'"  ;
				$result=mysqli_query($conn,$query);
				$count=mysqli_num_rows($result);
				if($count==1)
				    header("location:proj_main.php");
			    else
					echo "<h2> Enter the correct Username and Password </h2>";
		
				 
				
	}
	
	if(isSet($_POST["submit1"]))
	{ header("location:proj_register.php");
    }
	
	mysqli_close($conn);
?>


</body>
</html>