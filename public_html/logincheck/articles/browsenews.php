<html>
<head>
<title>News-article</title>
<link rel="stylesheet" type="text/css" href="browseteach.css" />
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['userid'])){ //if login in session is not set
    header("Location://iamrana.com/index.php");
}
?>
<div id="banner">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo.jpg" width="200px" height="45px"/>
<A HREF = logout.php>Log out</A>
<a href='//iamrana.com/index.php'>Login Page</a>&nbsp;&nbsp;&nbsp;<a href='//iamrana.com/logincheck/logincheck.php'>Home Page</a>
</div>
<div id="main">
<div id="top">
<a href="mailto:soumyajyoti.naskar@innoraft.com">MAIL ME-DIRECT LINK</a>
<a href="http://www.innoraft.com">INNORAFT WEBSITE</a>
<a href="http://www.google.com">GOOGLE SEARCH</a>
<a href="http://www.twitter.com"><img src="tw.png" width="40px" height="40px" id="img1" /></a>
<a href="http://www.youtube.com"><img src="yt.png" width="40px" height="40px" id="img2" /></a>
<a href="http://www.facebook.com"><img src="fb.svg" width="40px" height="40px" id="img3" /></a>
</div>
<div id="left">
<img src="cat.gif" height="200" width="200"/>
<EMBED src="charlixcx.mp3" height="200" width="200"></EMBED>

</div>
<div id="secondleft" align="center">
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="gc085475"; // Mysql password
$db_name="teacherStudent"; // Database name
$tbl_name="article"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name WHERE access='public' AND articletype='newsarticl'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
echo "You have access permission for these  ".$count." articles listed below"."<br>";
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	
   

$articleid="{$row['articleid']}";
$articlename="{$row['articlename']}";
$articletype="{$row['articletype']}";
$body="{$row['body']}";
$creationtime="{$row['creationtime']}";
$access="{$row['access']}";
$userid="{$row['userid']}";


echo "<div id='showmybaby'>"."<a href='http://iamrana.com/logincheck/articles/article.php?artid=$articleid'>".$articlename."</a>"."</div>";

}
?>
</div>
<div id="right">
<marquee direction="up" scroll delay="7" id="mar"><a href="http://iamrana.com/logincheck/articles/browseteach.php/topviewed.php">Top viewed</a><br><a href="http://iamrana.com/logincheck/articles/browseteach.php/mostrecent.php">Most Recent</a><br><a href="http://iamrana.com/logincheck/articles/browseteach.php/innovative.php">Innovative</a><br><a href="http://iamrana.com/logincheck/articles/browseteach.php/science.php">Science</a><br><a href="http://iamrana.com/logincheck/articles/browseteach.php/teachersguide.php">Teacher's guide</a><br><a href="http://iamrana.com/logincheck/articles/browseteach.php/livechat.php">Live chat</a><br></marquee>
</div>
<div id="down">


</div>
</div>



</body>
</html>
