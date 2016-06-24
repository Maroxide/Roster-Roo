<?php
session_start();
if(!$_SESSION['email']){
header("location:http://rosterroo.site88.net/Login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Roster-Roo | <?php echo $_SESSION['fname']; ?></title>
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
<<<<<<< HEAD
         <?php echo'<a class="navbar-brand" href=http://rosterroo.site88.net/user.php?id='.$_SESSION['userid'].'">Roster-Roo</a>'?>
=======
         <?php echo'<a class="navbar-brand" href=http://rosterroo.site88.net/user.php?id='.$_SESSION["userid"].'">Roster-Roo</a>'?>
>>>>>>> origin/master
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <?php echo '<li class="active"><a href="http://rosterroo.site88.net/user.php?id='.$_SESSION["userid"].'">Home</a></li>'; ?>  
<<<<<<< HEAD
           <?php echo '<li> <a href= "http://rosterroo.site88.net/viewroster.php?id='.$_SESSION["userid"].'">Assign Rosters</a></li>'; ?>
           <?php echo '<li><a href="http://rosterroo.site88.net/roster.php?id=' .$_SESSION["userid"].'"> Create Shift</a></li>'; ?>  
            <?php echo '<li><a href="http://rosterroo.site88.net/employee.php?id=' .$_SESSION["userid"].'">Create Employees</a></li>'; ?> 
            <?php echo '<li><a href="http://rosterroo.site88.net/viewemployees.php?id=' .$_SESSION["userid"].'">View Roster/Notify Employee</a></li>'; ?>  
=======
           <?php echo '<li><a href="http://rosterroo.site88.net/roster.php?id=' .$_SESSION["userid"].'">Rosters</a></li>'; ?>  
            <?php echo '<li><a href="http://rosterroo.site88.net/employee.php?id=' .$_SESSION["userid"].'">Employees</a></li>'; ?>  
>>>>>>> origin/master
          </ul>          
            <ul class="nav navbar-nav navbar-right">
            	
   
	
 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Info <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
           <?php echo '<li>Name: <small>'.$_SESSION['fname'].' '.$_SESSION['lname'].'</small></li>'; ?>
             <?php echo '<li>Company Name: <small>'.$_SESSION['cname'].'</small></li>'; ?>
       
          </ul>
        </li>
<<<<<<< HEAD
           
=======
            <?php echo '<li><a href="Post.php?id='.$_SESSION["userid"].'" data-toggle="tooltip" data-placement="bottom" title="Post a new blog" ><span class="glyphicon glyphicon-pencil"></span>Post</a></li>';?>
>>>>>>> origin/master
            <li><a href="http://rosterroo.site88.net/redirect.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
          </div>
          </ul>
        </div>
      </div>
    </nav>
    <div id = "alert_placeholder"></div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">A little helping hand...</h4>
      </div>
      <div class="modal-body">
      This is your user profile, do stuff with it!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id = "alert_placeholder"></div>
    <div class="container">
      <div class="jumbotron">
        <h1>Welcome!</h1>
         <br>
         <p>Hey <?php echo $_SESSION['fname'];?>, ready to make a roster?</p>
   
         <h3>Why don't you check out some of your previous rosters:</h3>
         </div>
         </div>
            <div class="container">
    <?php
 $dbhost = "mysql1.000webhost.com"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "a6310979_roster"; // the name of the database that you are going to use for this project
$dbuser = "a6310979_user"; // the username that you created, or were given, to access your database
$dbpass = "Roster123"; // the password that you created, or were given, to access your database
<<<<<<< HEAD
 $userid = $_SESSION['userid'];
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
    if(!isset($_GET['by'])){
 $sql = "SELECT *FROM employees WHERE userid = '$userid' ";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result)){

$empname =$row['empname'];
	$empemail=$row['empemail'];
=======
 
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
    if(!isset($_GET['by'])){
 $sql = "SELECT *FROM blog LIMIT 0, 10";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result)){

$title =$row['title'];
	$description=$row['description'];
	$id=$row['postID'];
	$reg=$row['reg_date'];
>>>>>>> origin/master

		
//-display the result of the array
echo '</div></div>';
echo '<div class="container">';
echo '<div class="jumbotron">';
<<<<<<< HEAD
echo '<h3><u>Employee Name:</u> '  .$empname .'</a></h3><br><small>Email: <i>' .$empemail. '</i></small>';
=======
echo '<h3><u>Title:</u> <a href="Userblog.php?id='.$id.'">'  .$title .'</a></h3><br><small>Date: <i>' .$reg. '</i></small>';
echo "<h4><u>Description: </u><i>" .$description. "</i></h4><br><h5><b>Points: ".$points. "</b></h5>";
>>>>>>> origin/master
echo "</div>";
echo "</div>";
}
}
?>
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
