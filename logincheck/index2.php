<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<script type="text/javascript">

function Submit(){
 var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
 var fname = document.form.firstame.value,
  lname = document.getElementById("lastname").value,
  femail = document.form.email.value,
  fpassword = document.form.password.value;
   
 if( fname == "" )
   {
     document.form.Name.focus() ;
  alert("Enter your firstname");
     return false;
   }
 if( lname == "" )
   {
     document.form.LastName.focus() ;
   alert("Enter your firstname");
     return false;
   }
    
   if (femail == "" )
 {
  document.form.Email.focus();
  alert("Enter your firstname");
  return false;
  }else if(!emailRegex.test(femail)){
  document.form.Email.focus();
  alert("Don't F*** please,Enter a valid email");
  return false;
  }
   
   
 if(fpassword == "")
  {
   document.form.Password.focus();
   alert("Enter your password");
   return false;
  }
  if(fname != '' && lname != '' && femail != '' && fpassword != ''){
   alert("form submitted successfully");
   }
     
}


</script>
<style>

</style>
<body>
<div id="master">
<div id="upper">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo.jpg" width="200px" height="45px" id="imgg" />
</div>
<div id="lower">
<form action="register.php" method="post" onsubmit="Submit()">
<table id="tab" align="center">
<tr><td><p>&nbsp;&nbsp;Please complete your details</p></td></tr>
&nbsp;<tr><td><input type="text" id="firstname" name="firstname" value="Enter Firstname" required="required" />&nbsp;<input type="text" id="lastname" name="lastname" value="Enter Lastname" required="required" /></td></tr>
&nbsp;<tr><td><input type="email" id="email" name="email" value="Enter Email Id" required="required" /></td></tr>
&nbsp;<tr><td><input type="password" id="password" name="password" value="Enter Password" required="required" /></td></tr>

&nbsp;<tr>
<td><label for="role">Choose your Role</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="role" name="role" value="teacher" />&nbsp;Teacher&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="role" name="role" value="student" />&nbsp;Student</td>


</tr>

&nbsp;<tr><td><input type="text" id="age" name="age" value="Enter Age" required="required" /></td></tr>

</table>
<center>
<div id="lowest">

<input type="submit" id="butt" name="butt" value="Complete Sign-up"  />By registering you confirm that you agree with our <b>Terms & Conditions</b> and <b>Privacy Policy</b>
</div>
</center>
</form>
<div id="error"><marquee behavior="alternate" scrollamount="4" direction="left">Better Luck Next Time</marquee></div></br>
<div id="signin">
<form action="logincheck.php" method="post">

<p id="signinquote">Existing User LogIn</p>
<input type="email" name="myusername" placeholder="Write email" />
<input type="password" name="mypassword" placeholder="password" />
<input type="submit" value="login" name="login" />
</form>
</div>

</div>

<center>
</div>
</center>
</body>
</html>
