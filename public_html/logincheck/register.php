<html>
<head><link rel="stylesheet" type="text/css" href="register.css" /></head>
<body>
<div id="banner">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo.jpg" width="200px" height="45px"/>
<A HREF = logout.php>Log out</A>
</div>
<div id="main">
<?php
$con=mysql_connect('localhost','root','gc085475');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
mysql_select_db('teacherStudent',$con);
	
	$firstname =  $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password= $_POST['password'];
	$role = $_POST['role'];
	$age =  $_POST['age'];
	

//$crypted_pass = crypt($password);

//$pass_from_login is the user entered password
//$crypted_pass is the encryption
//if(crypt($pass_from_login,$crypted_pass)) == $crypted_pass)
//{
  // echo("hello user!")
//}





$sql="INSERT INTO user (firstname,lastname,email,password,role,age)
VALUES ('$firstname', '$lastname', '$email','$password','$role', '$age')";
$res=mysql_query($sql);
if($res)
{
	echo "inserted successfully "."<br/>";
}

echo "1 record added";

mysqli_close($con);
?>
</div>
	</body>
</html>
