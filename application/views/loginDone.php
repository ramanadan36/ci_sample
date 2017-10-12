<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php
$email=$_POST["email"];
$password=$_POST["password"];

mysql_connect("localhost","root"," ");
mysql_select_db("social");
$s="select * from register where email='$email' AND password='$password'";

$run=mysql_query($s1);
if(mysql_num_rows($run)>0)
{
   echo "Login Done";
}
else
{
	echo "Login failed";
}
?>
</body>
</html>