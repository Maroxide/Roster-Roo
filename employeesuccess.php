<?php
session_start();
?>
<?php
$host = "mysql1.000webhost.com";
$user = "a6310979_user";
$password = "Roster123";
$conn = mysql_connect($host, $user, $password);
$db = mysql_select_db('a6310979_roster', $conn);
if(! get_magic_quotes_gpc() )
{
   $empname = addslashes ($_POST['empname']);
   $empemail = addslashes($_POST['empemail']);
    $userid= addslashes ($_SESSION["userid"]);
}
else
{
   $empname = $_POST['empname'];
    $empemail = $_POST['empemail'];
    $userid= $_SESSION["userid"];
}


$query = mysql_query("select * from employees where empname='$empname' AND empemail='$empemail'", $conn);
$rows = mysql_num_rows($query);
if ($rows == 1) {
	$errors[] = 'That employee already exists, try another email';
}else
{
	
$sql = "INSERT INTO employees ".
       "(empname,empemail,userid) ".
       "VALUES('$empname','$empemail','$userid')";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
}
mysql_close($conn);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Roster-Roo | Success!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css">

<!-- Latest compiled Angular.js library-->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>

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

	<link rel="shortcut icon" href="food.ico">
  </head>

  <body onLoad="timer = setTimeout(function(){
                      window.location= 'http://rosterroo.site88.net/user.php';
                      },2000)">
      <div class="page-header">
      <h1><img alt="Logo" src="logo.jpg"/> Roster-Roo <small>Roster Making Made Easy</small></h1>
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
            <li><a href="http://rosterroo.site88.net/signup.php" data-toggle="tooltip" data-placement="bottom" title="This is not quite ready yet, sozzles." ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="http://rosterroo.site88.net/Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
        HELP!
        <br>
        Please enter your credentials(Name,Company Name,Email,Password) and click submit to create a Roster-Roo account.  <hr>
        
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
        <h1>Employee signup successful!</h1>      
         <br>
         </div>
    </div>

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
