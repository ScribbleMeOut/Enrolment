/*
Check login
----------------------------------------------
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="nptc"; // Database name 
$tbl_name="users"; // Table name 
// Connect to server and select databse. 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 
// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and
password='$password'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("username");
session_register("password"); 
header("location:index.html");
}
else {
echo "
<p>Wrong Username or Password</p>
<form action=\"check_login.php\" method=\"post\">
		<table class=\"login_table\">
		<tr>
		<td>Username:</td>
		<td><input type=\"text\" name=\"username\" id=\"username\"></td>
		</tr>
		<tr>
		<td>Password:</td>
		<td><input type=\"text\" name=\"password\" id=\"password\"></td>
		</tr>
		<tr>
		<td><input type=\"submit\" value=\"Login\"></td>
		</tr>
		</table>
	</form>
";
}
?>
------------------------------------
Check if logged in
------------------------------------
<?php
	error_reporting(0);
session_start();
if(!session_is_registered(username)){
header("location:index.php");
}
?>
--------------------------------------
LogOut
--------------------------------------
<?php 
session_start();
session_destroy();
?>

	<?php
	error_reporting(0);
session_start();
if(!session_is_registered(username)){
header("location:index.php");
}
?>
*/