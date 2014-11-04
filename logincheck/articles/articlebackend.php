<html>
<head>
<title>News-article</title>
<link rel="stylesheet" type="text/css" href="article.css" />
</head>
<body>
<?php
session_start();
?>
<div id="banner">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo.jpg" width="200px" height="45px"/>
<A HREF ="logout.php">Log out</A>
</div>
<div id="main" align="center">
<?php
$rana= $_GET["rana"];
echo $ana;
?>
<?php
$u=$_SESSION["userid"];
$combo = $_POST['combo'];
$con=mysql_connect('localhost','root','gc085475');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
mysql_select_db('teacherStudent',$con);
	
	
	$dat=date("Y/m/d H:i:s");
	echo $combody;
	

//$crypted_pass = crypt($password);

//$pass_from_login is the user entered password
//$crypted_pass is the encryption
//if(crypt($pass_from_login,$crypted_pass)) == $crypted_pass)
//{
  // echo("hello user!")
//}





$sql="INSERT INTO comment (articleid,userid,commentdate,commentbody)
VALUES ('$rana', '$u', '$dat','$combo')";
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
