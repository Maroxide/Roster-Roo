<?php
session_start();
?>

<?php
 mysql_connect("mysql1.000webhost.com","a6310979_user","Roster123") or die(mysql_error());
 mysql_select_db("a6310979_roster") or die("Couldn't connect to the database!");

if(isset($_POST['clickme']))

{


if(! get_magic_quotes_gpc() )

{
  // Check for a proper First Name
 if (!empty($_REQUEST['empname'])) {
  $empname = $_REQUEST['empname'];
  $pattern = "/^[a-zA-Z\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$empname)){ $empname = $_REQUEST['empname'];}
  else{ $errors[] = 'Your Name can only contain A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your Employees Name.';}

//Check for a valid Email
  if (!empty($_REQUEST['empemail'])) {
  $empemail = $_REQUEST['empemail'];
  $pattern = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
  if (preg_match($pattern,$empemail)){ $empemail = $_REQUEST['empemail'];}
  else{ $errors[] = 'Your Email can only be numbers and letters.';}
  } else {$errors[] = 'You forgot to enter your Employees Email.';}
  


else
{
    $empname = $_POST['empname'];
    $empemail = $_POST['empemail'];
    $userid = $_SESSION['userid'];
}

$sql = "INSERT INTO employees ".
       "(empname,empemail,userid) ".
       "VALUES('$empname','$empemail','$userid')";
$retval = mysql_query( $sql, $conn );

}
?>
