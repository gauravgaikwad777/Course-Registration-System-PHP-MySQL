<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost","root","") or die ("check your server connection.");

mysql_select_db("2008b4a5723p");

echo "<h2>Course Registration</h2>";
$query="SELECT course.name FROM course";
$results=mysql_query($query) or die(mysql_error());
echo"<b>Available courses</b> <table  border=’2’>\n";
while ($rows=mysql_fetch_assoc($results)) {
echo "<tr>\n"; 
foreach($rows as $value) 
{
echo "<td>\n";  
echo $value; 
echo "</td>\n"; 
}
echo "</tr><br>\n"; 
}
echo "</table>\n";
?>

<html>
<body>
<form method="post" action="student_course.php">
<br/>
Your User Name   :<input type="text" name="name"><br/>
Course ID :<input type="text" name="course">
<br/>
<input type="submit" class="myButton" name="submit" value="Register">
</form>
</body>
</html>	
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