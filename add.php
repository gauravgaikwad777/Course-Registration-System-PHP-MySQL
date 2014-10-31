<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
?>
<form method="post" action="modify.php">
<h2>Add User Information</h2>
Add User Information name:<input type="text" name="info"><br/>
Add Information :<input type="text" name="value"><br/>
<input type="submit" class="myButton" name="submit" value="submit">
</form>

<footer>
            <a href="default.aspx" style="color: white;">Back to home</a>
            © 2013 Gaikwad Company, Inc. Course Registration System 
        </footer>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	