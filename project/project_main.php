<html>

<body>

<form action="<?php $_PHP_SELF ?>" method="post">
<input type="checkbox" name="w1"><img src="w1.jpg" width="100px" height="100px" /></input>
<input type="checkbox" name="w2"><img src="w2.jpg" width="100px" height="100px" /></input>
<input type="checkbox" name="w3"><img src="w3.jpg" width="100px" height="100px" /></input>
<input type="checkbox" name="w4"><img src="w4.jpg" width="100px" height="100px" /></input>
<input type="checkbox" name="w5"><img src="w5.jpg" width="100px" height="100px" /></input>
<input type="submit" />
</form>

<?php
	if($_POST['w1']){
		echo "<img src='w1.jpg' width='100px' height='100px' />";
	}
?>


</body>

</html>