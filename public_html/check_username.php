<?php
$conn = mysql_connect("localhost","root","gc085475") or die("Database not connected");
$db=mysql_select_db("teacherStudent", $conn) or die("Database not connected");
if(isset($_POST['email']))//If a username has been submitted
{
$email = mysql_real_escape_string($_POST['email']);//Some clean up :)

$check_for_email = mysql_query("SELECT COUNT(*) userid FROM member WHERE email='$email'");
//Query to check if username is available or not

if($check_for_email)
{
echo '1';//If there is a  record match in the Database - Not Available
}
else
{
echo '0';//No Record Found - Username is available
}
}


?>
