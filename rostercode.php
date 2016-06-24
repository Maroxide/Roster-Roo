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

  if (!empty($_REQUEST['month'])) {
  $month = $_REQUEST['month'];
  $pattern = "/^[a-zA-Z\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$month)){ $month = $_REQUEST['month'];}
  else{ $errors[] = 'Your Name can only contain A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your Month';}


  // Check for a proper Date
 if (!empty($_REQUEST['date'])) {
  $date = $_REQUEST['date'];
  $pattern = "/^[a-zA-Z\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$date)){ $date = $_REQUEST['date'];}
  else{ $errors[] = 'Your Name can only contain A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your Date.';}

//Check for a valid time
  if (!empty($_REQUEST['time'])) {
  $time = $_REQUEST['time'];
  $pattern = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
  if (preg_match($pattern,$time)){ $time = $_REQUEST['time'];}
  else{ $errors[] = 'Your Email can only be numbers and letters.';}
  } else {$errors[] = 'You forgot to enter your Time.';}
  


else
{
    $month = $_POST['month'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $userid = $_SESSION['userid'];
}

$sql = "INSERT INTO rosters ".
       "(month,date,time,userid) ".
       "VALUES('$month','$date','$time','$userid')";
$retval = mysql_query( $sql, $conn );

}
?>
