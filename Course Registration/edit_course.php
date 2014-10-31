<form name="form1" method="post" action="default.php" >
<input type="submit" class="myButton" name="Submit" value="Student Login">
</form>

<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost", "root", "") or die ("check your server connection");
$name=$_SESSION['username'];
mysql_select_db ("2008b4a5723p");
echo"COURSES TAKEN BY '$name' :<br/>";
$query="Select regis.cname, course.credit, course.instructor 
FROM course 
INNER JOIN regis 
ON course.name=regis.cname 
AND regis.uname= '$name'";

$results=mysql_query($query) or die(mysql_error());

echo "<table  border=’2’><tr><td><b>Course ID</b></td><td><b>Credits</b></td><td><b>Instructor</b></td></tr>\n";
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
<br/>
<form method="post" action="course_edited.php">
User name   :<input type="text" name="name"><br/>
Course to change:<input type="text" name="course"><br/>
New course:<input type="text" name="new"><br/>

<input type="submit" class="myButton" name="submit" value="Change Course">
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