<?php
session_start();
$_SESSION['authuser']=1;

?>

<center>
<table  width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#ADD8E6" >
<tr>
<form name="form1" method="post" action="result1.php" onsubmit="return validate(this);">
<td>
<table  width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#ADD8E6">
<tr>
<td colspan="3"><strong><center><h2>Admin Login</h2></center></strong></td>
</tr>
<tr>
<td>AdminID:</td>
<td><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" class="myButton" name="Submit" value="LOGIN"></td>
</form>

</tr>
</table>
</td>
</tr>
</table>
</center>
<form name="form1" method="post" action="default.php" style="float:left">
<input type="submit" class="myButton" name="Submit" value="Student Login">
</form>
<footer>
            <a href="default.aspx" style="color: white;">Back to home</a>
            © 2013 Gaikwad Company, Inc. Course Registration System 
        </footer>
<html>
<head>
<script type="text/javascript">
function validate(form){
 var userName = form.myusername.value;
 var password = form.mypassword.value;

 if (userName.length === 0) {
  alert("You must enter a username.");
  return false;
 }

 if (password.length === 0) {
  alert("You must enter a password.");
  return false;
 }

 return true;
}
</script>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	
