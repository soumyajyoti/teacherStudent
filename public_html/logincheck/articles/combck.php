<html>
<head>
<title>edit profile</title>
<link rel="stylesheet" type="text/css" href="combck.css" />
</head>
<body>
<div id="banner">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo.jpg" width="200px" height="45px"/>
<A HREF = logout.php>Log out</A>
<a href='//iamrana.com/index.php'>Login Page</a>&nbsp;&nbsp;&nbsp;<a href='//iamrana.com/logincheck/logincheck.php'>Home Page</a>
</div>
<div id="main" align="center">
<?php

session_start();
$con=mysql_connect('localhost','root','gc085475');
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysql_select_db('teacherStudent',$con);

	$firstname1 =  $_POST['firstname1'];
	$lastname1 = $_POST['lastname1'];
	$password1= $_POST['password1'];
	$age1 =  $_POST['age1']; 
	$email1=$_SESSION['email'];
$sql="UPDATE user SET firstname='$firstname1',lastname='$lastname1',password='$password1',age='$age1' WHERE email='$email1'";
$res=mysql_query($sql,$con);
if($res)
{
	echo "Updated successfully "."<br/>";
}

echo "1 record Updated :".$_SESSION['firstname']." ".$_SESSION['lastname'];

mysqli_close($con);

?>
</div>
</body>
</html>
