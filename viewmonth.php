<?php
session_start();
if(!$_SESSION['email']){
header("location:http://rosterroo.site88.net/Login.php");
}
 $month = $_GET['month'];
 $empid = $_GET['empid'];


?>



<!DOCTYPE html>
<html>
  <head>
    <title>Roster-Roo | <?php echo $_SESSION['cname']; ?> Confirm Roster / Send Email </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" src="socialbtn.css" type="text/css"/>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <link async href="http://fonts.googleapis.com/css?family=Warnes" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
<script>
  $(function () {
  $('[data-toggle="popover"]').popover()
})
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
  </script>
  <script>
      $(document).ready(function() {
          $("a.dropdown-toggle").click(function(ev) {
              $("a.dropdown-toggle").dropdown("toggle");
              return false;
          });
          $("ul.dropdown-menu a").click(function(ev) {
              $("a.dropdown-toggle").dropdown("toggle");
              return false;
          });
      });
    </script>

	<link rel="shortcut icon" href="favicon.ico">
  </head>

   <body>
   <div class="page-header">
      <h1><img alt="Logo" src="logo.png"/> Roster-Roo <small>Roster Making Made Easy</small></h1>
  </div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
         <?php echo'<a class="navbar-brand" href=http://rosterroo.site88.net/user.php?id='.$_SESSION['userid'].'">Roster-Roo</a>'?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <?php echo '<li class="active"><a href="http://rosterroo.site88.net/user.php?id='.$_SESSION["userid"].'">Home</a></li>'; ?>  
           <?php echo '<li> <a href= "http://rosterroo.site88.net/viewroster.php?id='.$_SESSION["userid"].'">Rosters</a></li>'; ?>
           <?php echo '<li><a href="http://rosterroo.site88.net/roster.php?id=' .$_SESSION["userid"].'"> Create Rosters</a></li>'; ?>  
            <?php echo '<li><a href="http://rosterroo.site88.net/employee.php?id=' .$_SESSION["userid"].'">Create Employees</a></li>'; ?> 
            <?php echo '<li><a href="http://rosterroo.site88.net/viewemployees.php?id=' .$_SESSION["userid"].'">View Roster/Notify Employee</a></li>'; ?>   
          </ul>          
            <ul class="nav navbar-nav navbar-right">
              
   
  
 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Info <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
           <?php echo '<li>Name: <small>'.$_SESSION['fname'].' '.$_SESSION['lname'].'</small></li>'; ?>
             <?php echo '<li>Company Name: <small>'.$_SESSION['cname'].'</small></li>'; ?>
       
          </ul>
        </li>
           
            <li><a href="http://rosterroo.site88.net/redirect.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
          </div>
          </ul>
        </div>
      </div>
    </nav>
<?php
 $dbhost = "mysql1.000webhost.com"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "a6310979_roster"; // the name of the database that you are going to use for this project
$dbuser = "a6310979_user"; // the username that you created, or were given, to access your database
$dbpass = "Roster123"; // the password that you created, or were given, to access your database
 $userid = $_SESSION['userid'];

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
    if(!isset($_GET['by'])){
 $sql = "SELECT * from employees where empid = '$empid'"  ;
$result = mysql_query($sql);
while($row=mysql_fetch_array($result)){
 $empname = $row['empname'];
 $empemail = $row['empemail'];
}
}

?>
    <div id = "alert_placeholder"></div>
    <div class="container">
      <div class="jumbotron">
        <h1>Send Roster!</h1>
         <br>
         <p>Hey <?php echo $_SESSION['fname'];?>, is this the roster you want to send to <?php echo $empname ;?>? </p>
   
         </div>
         </div>
            <div class="container">



<table class="table table-striped table-hover ">
  <thead>
    <tr>
     
      <th>Date</th>
      <th>Time</th>

    </tr>
  </thead>
  <tbody>

   <?php
 $dbhost = "mysql1.000webhost.com"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "a6310979_roster"; // the name of the database that you are going to use for this project
$dbuser = "a6310979_user"; // the username that you created, or were given, to access your database
$dbpass = "Roster123"; // the password that you created, or were given, to access your database
 $userid = $_SESSION['userid'];

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
    if(!isset($_GET['by'])){
 $sql = "SELECT date,time from link inner join rosters on rosters.rostid = link.rostid Where link.month = '$month' and link.empid = '$empid'  Order by date asc"  ;
$result = mysql_query($sql);
while($row=mysql_fetch_array($result)){
  $date =$row['date'];
  $time=$row['time'];
  
?>

<tr>
	<td><?php echo $date ?></td>
	<td><?php echo $time ?></td>
</tr>
<?php
} //close while loop
}
?>

   </tbody>
</table> 

 <div class="col-sm-offset-0 col-sm-10">
            

 <form action="" method="post">
    <input class="btn btn-success" type="submit" value="SEND ROSTER" />
    <input type="hidden" name="button_pressed" value="1" />
     <?php echo  '<a href="http://rosterroo.site88.net/user.php" class="btn btn-link" role="button">Cancel</a>';?>
</form>

<?php

if(isset($_POST['button_pressed']))
{
    $to      = $empemail;
    $subject = 'Your Roster for '.$month.' has arrived!';
    $message = 'Hi ' .$empname. ' your Roster is available at http://rosterroo.site88.net/view.php?empid='.$empid.'&month='.$month.'';
    $headers = 'From: donotreply@rosterroo.com' . "\r\n" .
        

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>
            
        
       
        </div>
        <br>
        <br>
<hr>

</div>

</div>
      <div class="clearfix visible-lg"></div>
    <center>
    <footer class ="footer">
    <div class = "container">
    <p class=" text-muted">Roster-Roo &copy; 2016</p>
    </div>
    </footer>
    </center>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>