

<?php
session_start();
$con=mysql_connect('localhost','root','gc085475');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
mysql_select_db('teacherStudent',$con);
	
	$artname = $_POST['nameofarticle'];
	$articletype = $_POST['articletype'];
	$creationtime = date("Y/m/d H:i:s");
	$access= $_POST['access'];
	$body = $_POST['body'];
	$userid = $_SESSION["userid"];
	
	session_destroy();
	

//$crypted_pass = crypt($password);

//$pass_from_login is the user entered password
//$crypted_pass is the encryption
//if(crypt($pass_from_login,$crypted_pass)) == $crypted_pass)
//{
  // echo("hello user!")
//}





$sql="INSERT INTO article (articlename,articletype,body,creationtime,access,userid)
VALUES ('$artname', '$articletype', '$body','$creationtime','$access', '$userid')";
$res=mysql_query($sql);
if($res)
{
	echo "inserted successfully "."<br/>";
}

echo "1 record added";

mysqli_close($con);
echo "<script>alert('Inserted Successfully');</script>";
header("Location:createnews.php");
?>
