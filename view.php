<?php
session_start();

 $month = $_GET['month'];
 $empid = $_GET['empid'];


?>



<!DOCTYPE html>
<html>
  <head>
    <title>Roster-Roo | <?php $empname; ?> Your Roster / Send Email </title>
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
          <a class="navbar-brand" href="http://rosterroo.site88.net/index.php">Roster-Roo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://rosterroo.site88.net/index.php">Home</a></li>
            
            <li><a href="http://rosterroo.site88.net/about.php">About Us</a></li>
            <li><a href="http://rosterroo.site88.net/contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://rosterroo.site88.net/signup.php" data-toggle="tooltip" data-placement="bottom" title="Sign Up for a Roster-Roo account. Dont worry they're Free!!" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="http://rosterroo.site88.net/Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
        <h1>Your Roster!</h1>
         <br>
         <p>Hey <?php echo $empname;?>,  this is your roster for <?php echo $month ;?>. </p>
   
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