<html>
<head>
<title>News-article</title>
<link rel="stylesheet" type="text/css" href="article.css" />
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['userid'])){ //if login in session is not set
    header("Location://iamrana.com/index.php");
}
if($_SESSION["role"]=='student' && $access=='private')
{
echo "You are a ".$_SESSION["role"]."<br>";
echo " not allowed to browse  private contents";


}
else
{
?>
<div id="banner">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo.jpg" width="200px" height="45px"/>
<A HREF ="logout.php">Log out</A>
</div>
<div id="main" align="center">
<?php
$rana= $_GET["artid"];
?>

<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="gc085475"; // Mysql password
$db_name="teacherStudent"; // Database name
$tbl_name="article"; // Table name

// Connect to server and select databse.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name WHERE articleid=$rana";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	
   

$articleid="{$row['articleid']}";
$articlename="{$row['articlename']}";
$articletype="{$row['articletype']}";
$body="{$row['body']}";
$creationtime="{$row['creationtime']}";
$access="{$row['access']}";
$userid="{$row['userid']}";
}
mysqli_close($con);
?>


<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="gc085475"; // Mysql password
$db_name="teacherStudent"; // Database name
$tbl_name="user"; // Table name

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql1="SELECT * FROM user a,article b WHERE a.userid=b.userid";
$result1=mysql_query($sql1);
$count1=mysql_num_rows($result1);

if(! $result1 )
{
  die('Could not get data: ' . mysql_error());
}
while($row1 = mysql_fetch_array($result1, MYSQL_ASSOC))
{
	
   

$firstname="{$row1['firstname']}";
$lastname="{$row1['lastname']}";
$email="{$row1['email']}";
$password="{$row1['password']}";
$role="{$row1['role']}";
$age="{$row1['age']}";


}
mysqli_close($conn);
?>

<div id="up">
<?php
echo      "<div id ='nm'>"."Article Name:"."<b>".$articlename."</b>"."</div>";
echo       "<div id='nm2'>"."Created By :"."<b>".$userid."</b>"."<b>"." "."</b>"."</div>"."<br>";
echo        "<div id='crt'>"."Created On :"."<b>".$creationtime."</b>"."</div>";
echo    "<div id='artt'>"."This article is a:"."<b>".$articletype."</b>"."</div>";
?>
</div>

<div id="mid" align="center">
<?php
echo "<p>".$body."</p>";
?>
</div>
<div id="midcom" align="center">


<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="gc085475"; // Mysql password
$db_name="teacherStudent"; // Database name
$tbl_name="comment"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name where articleid=$rana";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	
   

$commentid="{$row['commentid']}";
$articleid="{$row['articleid']}";
$userid="{$row['userid']}";
$commentdate="{$row['commentdate']}";
$commentbody="{$row['commentbody']}";
echo "<div id='showmybaby'>"."User-".$userid."said: ".$commentbody."<br>"."On".$commentdate."</div>";
}

?>





</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="lower">
<form method="post" action="articlebackend.php?rana=<?php echo $rana ?>">
<img src="commentadd.png" width="70px" height="70px" />
<input type="text" name="combo" />&nbsp;
 <input type="submit" value="Add Comment"/>
</form>


</div>

</div>
</body>
<?php
}
?>
</html>
