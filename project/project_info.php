<html>
<head>
<title> INFO </title>
</head>

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
				 
  				$query="select * from login where EMAILID='$emailid' AND PASSWORD='$password'"  ;
				 
				$result=mysqli_query($conn, $query);
			   while(($row=mysqli_fetch_assoc($result)) !=NULL)
	             { 
					 echo "WELCOME " . $row["name"];
		
                     if($row["gender"]=="M")
                       echo "<img src='boy.jpg' width='200px' height='200px' />";
                     else 
                       echo "<img src='girl.jpg' width='200px' height='200px' />";						 
				
	             }
	}
	
	
	mysqli_close($conn);
?>

		      	 