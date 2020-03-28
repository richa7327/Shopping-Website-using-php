<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body background="register.jpg">  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $passwordErr = $genderErr = $addressErr = "";
$name = $email = $password = $gender = $address = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  { if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
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
	
	 if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
    
  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = ($_POST["address"]);
    }
  

 
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>


<h1> <i> <b> <u> <marquee bgcolor="white "BEHAVIOR=ALTERNATE> THANK YOU FOR CHOOSING US! </marquee> </u> </b> </i> </h1>
<center><h1> <i> <b> Enter your details </b> </i> </h1>

<p><span class="error">* required field.</span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password : <input type="password" name="password" value="<?php echo $password; ?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="F") echo "checked";?> value="F">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="M") echo "checked";?> value="M">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Address : <textarea name="address" rows="5" cols="40"><?php echo $address;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  </center>
</form>

 <?php
$conn = mysqli_connect('localhost','root','','project');
	if(!$conn)
		die(mysqli_error($conn));
	
	if(isSet($_POST["submit"]))
	{ 
				 if(isSet($_POST["email"]))
		      	     $email=$_POST["email"];
		         if(isSet($_POST["password"]))
			         $password=$_POST["password"];
				 if(isSet($_POST["name"]))
		      	     $name=$_POST["name"];
		         if(isSet($_POST["gender"]))
			         $gender=$_POST["gender"];
				 if(isSet($_POST["address"]))
			         $address=$_POST["address"];
				 
				 session_start();
                 $_SESSION['value']=$email;
				 
		     
			 if($email!=NULL && $password!=NULL && $name!=NULL & $gender!=NULL)	
			 {  $query="select NAME from login where EMAILID='$email' AND PASSWORD='$password'"  ;
				$result=mysqli_query($conn,$query);
				$count=mysqli_num_rows($result);
				if($count==1)
				{ echo "<h2> Email-id already exsists </h2>"; }
			     else
				 { $query1="INSERT INTO login values('$name','$password','$address','$gender','$email')"  ;
		           $query2="INSERT INTO items(EMAIL) values ('$email')";
				
				   if (mysqli_query($conn, $query1))
				   {  if(mysqli_query($conn , $query2))
			           header("location:proj_main.php");
				   
				   }
				  else
				  {
					 "Error: " . $query1 . "<br>" . mysql_error($conn);
				  }
				
                }
			 }
			else 
				echo "<h2>Enter the required values</h2>";
	
           
	}
	mysqli_close($conn);
?>



</body>
</html>
