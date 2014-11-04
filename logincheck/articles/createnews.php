<html>
<head>
<title>News-article</title>
<link rel="stylesheet" type="text/css" href="createnews.css" />
</head>
<body>

<div id="banner">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo.jpg" width="200px" height="45px"/>
<A HREF = logout.php>Log out</A>
</div>
<div id="main">
<div id="left"><br/><br/><br/><br/><br/><img src="WriteToUs.png" height="200px" width="300px"/></div>
<div id="right">


<form id="createnewsform" method="post" action="createteachbackend.php">

<table id="tab" align="center">
<tr>
<td>
<LABEL for="articlename">Article Name: </LABEL>
</td>
<td>
<input type="text" id="article" name="nameofarticle" required="required" placeholder="name of your baby"/><BR>
</td>
<td>
<LABEL for="articletype">Article Type: </LABEL>
</td>
<td>
<input type="radio" id="teachingarticle" name="articletype" value="teachingarticle"/>Teaching-Essential
</td>
<td>
<input type="radio" id="newsarticle" name="articletype" value="newsarticle" />&nbsp;News-Article<BR>
</td>
</tr>
<tr>
<td>    
<LABEL for="creationtime">Creation Time: </LABEL>
</td>
<td>
<INPUT type="text" id="creationtime" name="creationtime" required="required" placeholder="what time is it?">
</td>
<td>
<LABEL for="access">Access Criteria: </LABEL>
</td>
<td>
<input type="radio" id="teachingarticle" name="access" value="public" />&nbsp;Public
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
 <INPUT type="reset" id="reset" name="reset" id="reset" value="undo!">
</td>
</tr>
</table>
</form>
</div>

</div>
</div>



</body>
</html>
