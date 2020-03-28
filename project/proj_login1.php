<html>
<head>
<title>form</title>
</head>

<body bgcolor="dancing">

<h1> <i> <b> <u> THANK YOU FOR CHOOSING US! </u> </b> </i> </h1>
<h1> <i> <b> Enter your details </b> </i> </h1>


<form action="proj_wlcm.php" method="POST">
<h3> Name </h3>
<input type="text" name="name" size="30" maxlength="30" placeholder="enter your name">

<h3> Username (5-10 characters)</h3>
<input type="text" name="username" size="10" maxlength="10" placeholder="enter your username">

<h3> Password </h3>
<input type="password" name="password" size="15" placeholder="enter your password">


<h3> Address </h3>
<textarea rows="5" cols="50" name="address" placeholder="write your address" >
</textarea>

<h3> Phone Number </h3>
<input type="text" name="phone" size="10" maxlength="10" placeholder="Enter phone no.">

<h3>Gender</h3>
<input type=radio name="gender" value="m" checked>
<i>Male</i>
<input type=radio name="gender" value="f">
<i>Female</i>

</hr>
</br>
<input type="submit" value="SUBMIT" name="submit">

</form>
</body>
</html>


