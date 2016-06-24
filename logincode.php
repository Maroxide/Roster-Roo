<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("mysql1.000webhost.com","a6310979_user","Roster123");
// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("a6310979_roster", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from users where pass='$password' AND email='$email'");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['email']=$email; // Initializing Session
header("location: http://rosterroo.site88.net/user.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>
