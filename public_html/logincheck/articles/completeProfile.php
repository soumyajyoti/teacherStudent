<html>
<head>
<title>News-article</title>
<link rel="stylesheet" type="text/css" href="completeProfile.css" />
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['userid'])){ //if login in session is not set
    header("Location://iamrana.com/index.php");
}
?>
<?php

session_start();
?>
<div id="banner">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo.jpg" width="200px" height="45px"/>
<A HREF = logout.php>Log out</A>
<a href='//iamrana.com/index.php'>Login Page</a>&nbsp;&nbsp;&nbsp;<a href='//iamrana.com/logincheck/logincheck.php'>Home Page</a>
</div>
<div id="main" align="center">
<div id="aa"><?php echo "Welcome to profile customization page ".$_SESSION["firstname"]." ".$_SESSION["lastname"] ?></div>
<div id="z"></div><div id="zz"></div>
<div id="bb"><?php echo "You can edit these session values for this session only in order to do some bad shit or keep your changes for ever by clicking on that weird type button " ?></div>
<div id="y"></div><div id="yy"></div>
<div id="cc"><?php echo "Your First name is"." ".$_SESSION["firstname"]." "."right?"; ?></div>
<div id="x"></div><div id="xx"></div>
<div id="dd"><?php echo "Your Last name is"." ".$_SESSION["lastname"]." "."right?"; ?></div>
<div id="w"></div><div id="ww"></div>
<div id="ee"><?php echo "You are"." ".$_SESSION["age"]." "."years old"; ?></div>
<div id="v"></div><div id="vv"></div>
<div id="ff"><?php echo "I know your id..it is"." ".$_SESSION["email"]; ?></div>
<div id="u"></div><div id="uu"></div>
<div id="gg"><?php echo "Know your password too.."." ".$_SESSION["password"]; ?></div>
<div id="t"></div><div id="tt"></div>
<div id="hh"><?php echo "Hey you are a "." ".$_SESSION["role"]." "."Thats cool..congrats!" ?></div>
<div id="s"></div><div id="ss"></div>
<div id="ii"><?php echo "And this is the userid we provide in order to track you."." ".$_SESSION["userid"]." "."M not gonna let you alter this value"; ?></div>
<form action="combck.php" method="post">
<table id="tab" align="center">
<tr><td><p>&nbsp;&nbsp;Update  Your Details Here</p></td></tr>
&nbsp;<tr><td><input type="text" id="firstname" name="firstname1" value="Enter Firstname"/></td></tr>
<tr><td><input type="text" id="lastname" name="lastname1" value="Enter Lastname"/></td></tr>
&nbsp;<tr><td><input type="password" id="password" name="password1" value="Enter Password"/></td></tr>

&nbsp;
<tr><td><input type="text" id="age" name="age1" value="Enter Age"/></td></tr>
<tr><td> <input type="submit" id="butt" name="butt" value="Update Profile"  /></td></tr>
</table>
</form>
</div>



</body>
</html>
