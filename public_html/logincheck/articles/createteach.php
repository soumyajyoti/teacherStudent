<html>
<head>
<title>News-article</title>
<link rel="stylesheet" type="text/css" href="createteach.css" />
	`
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['userid'])){ //if login in session is not set
    header("Location://iamrana.com/index.php");
}
if($_SESSION['role']=='student')
{
	echo "ERROR: You are not allowed to create teaching articles. ";
	header("Location://iamrana.com/index.php");	
}

?>
<div id="banner">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo.jpg" width="200px" height="45px"/>
<A HREF = logout.php>Log out</A>
<a href='//iamrana.com/index.php'>Login Page</a>&nbsp;&nbsp;&nbsp;<a href='//iamrana.com/logincheck/logincheck.php'>Home Page</a>
</div>
<div id="main">

<div id="left"><br/><br/><br/><br/><br/><img src="teacher.gif" height="200px" width="200px"/></div>
<div id="right">


<form id="createnewsform" method="post" action="createteachbackend.php">

<table id="tab" align="center">
<tr>
<td>
<LABEL for="articlename">Article Name: </LABEL>
</td>
<td>
<input type="text" id="article" name="nameofarticle" required="required" placeholder="name of your baby"/>
</td>
<td>
<LABEL for="articletype">Article Type: </LABEL>
</td>
<td>
<input type="radio" id="teachingarticle" name="articletype" value="teachingarticle" checked="checked"/>&nbsp;Teaching-Essential
</td>
<td>
<input type="radio" id="newsarticle" name="articletype" value="newsarticle" />&nbsp;News-Article<BR>
</td>
</tr>
<tr>
<td>    

</td>
<td>
</td>
<td>
<LABEL for="access">Access Criteria: </LABEL>
</td>
<td>
<input type="radio" id="teachingarticle" name="access" value="public" checked="checked" />&nbsp;Public
</td>
<td>
<input type="radio" id="newsarticle" name="access" value="private" />&nbsp;Private<BR>
</td>
</tr>
<tr >
<td>
<LABEL for="body">Article Content: </LABEL>
</td>
<td colspan="5">
<textarea rows="25" cols="100" id="articlebody" name="body" autofocus="autofocus" form="createnewsform" required="required" placeholder="Creation is fun">
</textarea>              
</td>
</tr>
<tr>
<td colspan="5">
<INPUT type="submit" id="publish" name="publish" value="publish!">&nbsp;&nbsp;
 <INPUT type="reset" id="reset" name="reset" id="reset" value="gun-do!">
</td>
</tr>
</table>
</form>
</div>

</div>
</div>


</body>
</html>
