<?php
session_start();
if(!$_SESSION['email']){
header("location:http://rosterroo.site88.net/Login.php");
}
?>

<?php
 $dbhost = "mysql1.000webhost.com"; // this will ususally be 'localhost', but can sometimes differ
 $dbname = "a6310979_roster"; // the name of the database that you are going to use for this project
 $dbuser = "a6310979_user"; // the username that you created, or were given, to access your database
 $dbpass = "Roster123"; // the password that you created, or were given, to access your database
  $empid = $_GET['empid'];
 $_SESSION['empid'] = $empid;

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
    if(!isset($_GET['by'])){
 $sql = "SELECT empname FROM employees WHERE empid = '$empid'";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result)){
  $empname = $row['empname'];
}
}
 $_SESSION['empname'] = $empname;
?>

<?php
 $dbhost = "mysql1.000webhost.com"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "a6310979_roster"; // the name of the database that you are going to use for this project
$dbuser = "a6310979_user"; // the username that you created, or were given, to access your database
$dbpass = "Roster123"; // the password that you created, or were given, to access your database
 $userid = $_SESSION['userid'];
 $month = $_GET['month'];
 $_SESSION['month']= $month;
 $rostid =$_GET['rostid'];
 $_SESSSION['rostid'] = $rostid;



mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
    if(!isset($_GET['by'])){
 $sql = "SELECT * FROM rosters WHERE rostid = '$rostid'";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result)){
  $date = $row['date'];
  $time = $row['time'];
  $_SESSION['date']=$date;
  $_SESSION['time']=$time;
}
}
 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Roster-Roo | <?php echo $_SESSION['cname']; ?> Confirm </title>
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

    <div id = "alert_placeholder"></div>
    <div class="container">
      <div class="jumbotron">
        <h1>Welcome!</h1>
         <br>
         <p>Hey <?php echo $_SESSION['fname'];?>, you would like <?php echo $_SESSION['empname'];?> to work <?php echo $_SESSION['date'];?> from <?php echo $_SESSION['time'];?> is that right? .</p><br><br>

             <div class="col-sm-offset-0 col-sm-10">
            <?php echo  '<a href="http://rosterroo.site88.net/addroster.php/?id='.$_SESSION["userid"].'&month='.$_SESSION['month'].'&rostid='.$rostid.'&empid='.$_SESSION['empid'].'"class="btn btn-success" role="button">Confirm</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';?>
            <?php echo  '<a href="http://rosterroo.site88.net/user.php" class="btn btn-link" role="button">Cancel</a>';?>
        
       
        </div>
         </div>
         </div>
        
     
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