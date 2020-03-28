<?php
$conn=mysql_connect('localhost','root','');
if(!$conn)
	die(mysql_error($conn));
if(!mysql_select_db('login',$conn))
	die(mysql_error($conn));

$query="select * from grades";
$result=mysql_query($query);
echo "STUDENT's  MARKLIST <br/> GRADES : 91-100=>A :: 81-90=>B :: 71-80=>C :: 61-70=>D :: below 60=>F";  
echo "<table border='1'> <tr><th>Name</th> <th>Roll No. </th> <th>English</th> <th>Maths </th> <th>Computer </th>" ; 
echo "<th> Grade</th></tr>";
	while(($row=mysql_fetch_assoc($result))  !=NULL)
	{
		$avg=($row["english"]+$row["maths"]+$row["computer"])/3;
		if($avg >90) 
			$grade='A';
		else if ($avg >80)
			$grade='B';
		else if ($avg >70)
			$grade='C';
		else if ($avg >60)
			$grade='D';
		else 
			$grade='F';
		
		echo "<tr> <td>" .$row["name"] ." </td> <td>".$row["rollno"]."</td>" ;
		echo "<td>" .$row["english"]."</td><td>".$row["maths"]."</td><td>".$row["computer"]."</td>";
		echo "<td>". $grade . "</td></tr>";
		
	}
echo "</table>";
mysql_close($conn);

?>