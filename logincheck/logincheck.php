<html>
<head>
<link rel="stylesheet" type="text/css" href="logincheck.css"/>
</head>
<body>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="gc085475"; // Mysql password
$db_name="teacherStudent"; // Database name
$tbl_name="user"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);
//$encr=crypt($mypassword);
$sql="SELECT firstname,lastname,role FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

//$firstname=mysql_query("SELECT firstname FROM $tbl_name WHERE email='$myusername' and password='$mypassword'");
// Register $myusername, $mypassword and redirect to file "login_success.php"
echo "<div id='banner'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='logo.jpg'/></div>";
/*if (mysql_num_rows($result) > 0) {
    $row = mysql_fetch_array($result);
    if(is_array($row)) {
        foreach ($row as $col => $val) {
           echo $val;
        }
    }
}
*/

/*if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    echo "{$row['firstname']}&nbsp; ".
         "{$row['lastname']} <br> ";
} */
echo "<div id='container'>";
echo "<br/>";
echo "<div id='welcome'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome";
echo "<div id='name'>";
if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    echo "{$row['firstname']}&nbsp; ".
         "{$row['lastname']} ";
}
echo "</div>";
echo"</div>";
echo "<div id='emailveri'>";
if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    echo "{$row['role']}";
    echo "fuck you";
}
echo "</div>";
echo "</div>";

}
else {

//echo "<div id='container'>"."Better Luck Next Time"."<br/>"."</div>";

//echo "<div id='container2'>"
	header("location:index2.php");
//echo "</div>";
}
?>
</body>
</html>
