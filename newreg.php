<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost","root","") or die ("check your server connection.");

mysql_select_db("2008b4a5723p");


?>
<html>
<head>
<title>STUDENT REGISTRATION</title>
</head>
<body>

<form method="post" action="insert_data.php">
<br/>
<h2>STUDENT REGISTRATION</h2>
Name :<input type="text" name="name"><br/>
Password :<input type="password" name="pass"><br/>
Branch :<input type="text" name="branch"><br/>
Year of passing :<input type="text" name="year"><br/>


<input type="submit" class="myButton" name="submit" value="Register">

</form>
<footer>
            <a href="default.aspx" style="color: white;">Back to home</a>
            © 2013 Gaikwad Company, Inc. Course Registration System 
        </footer>
</body>
</html>	

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	

