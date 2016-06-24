<?php
session_start();
if(!$_SESSION['email']){
header("location:http://rosterroo.site88.net/Login.php");
}
?>
<<<<<<< HEAD
<!DOCTYPE html>
=======
!DOCTYPE html>
>>>>>>> origin/master
<html>
  <head>
    <title>Roster-Roo | <?php echo $_SESSION['cname']; ?> Roster</title>
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


	<link rel="shortcut icon" href="favicon.ico">
  </head>

  <body>
   <div class="page-header">
<<<<<<< HEAD
       <h1><img alt="Logo" src="logo.png"/> Roster-Roo <small>Roster Making Made Easy</small></h1>
=======
       <h1><img alt="Logo" src="logo.jpg"/> Roster-Roo <small>Roster Making Made Easy</small></h1>
>>>>>>> origin/master
   </div>

   <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
         <?php echo'<a class="navbar-brand" href="User.php?id='.$_SESSION["userid"].'">Roster-Roo</a>'?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
<<<<<<< HEAD
            <?php echo '<li class="active"><a href="http://rosterroo.site88.net/user.php?id='.$_SESSION["userid"].'">Home</a></li>'; ?> 
            <?php echo '<li> <a href= "http://rosterroo.site88.net/viewroster.php?id='.$_SESSION["userid"].'">Rosters</a></li>'; ?>
           <?php echo '<li><a href="http://rosterroo.site88.net/roster.php?id=' .$_SESSION["userid"].'"> Create Rosters</a></li>'; ?>  
            <?php echo '<li><a href="http://rosterroo.site88.net/employees.php?id=' .$_SESSION["userid"].'">Create Employees</a></li>'; ?>  
=======
            <?php echo '<li class="active"><a href="http://rosterroo.site88.net/user.php?id='.$_SESSION["userid"].'">Home</a></li>'; ?>  
           <?php echo '<li><a href="http://rosterroo.site88.net/roster.php?id=' .$_SESSION["userid"].'">Rosters</a></li>'; ?>  
            <?php echo '<li><a href="http://rosterroo.site88.net/employees.php?id=' .$_SESSION["userid"].'">Employees</a></li>'; ?>  
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
            <?php echo '<li><a href="Post.php?id='.$_SESSION["userid"].'" data-toggle="tooltip" data-placement="bottom" title="Post a new blog" ><span class="glyphicon glyphicon-pencil"></span>Post</a></li>';?>
            <li><a href="http://rosterroo.site88.net/redirect.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
          </div>
          </ul>
        </div>
      </div>
    </nav>

      <div class="modal-body">
		<br>
        Please enter in each days details for the Roster(Month,Date,Times) and click add to add another day to the roster, or click submit create a Roster-Roo roster.  <hr>
        
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
        <h1>Enter your roster details in the corresponding spaces below:</h1>      
         <br>
 <?php
if (isset($_REQUEST['submitted'])) {
// Initialize error array.
  $errors = array();
  // Check for a proper Month
  if (!empty($_REQUEST['Month'])) {
  $month = $_REQUEST['month'];
  $pattern = "/^[a-zA-Z\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$fname)){ $fname = $_REQUEST['month'];}
  else{ $errors[] = 'Your Month can only contain A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter the Month for which the roster is for.';}
  
 
  
  //Check for a valid Date
  if (!empty($_REQUEST['date'])) {
  $email = $_REQUEST['date'];
  $pattern = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
  if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
  else{ $errors[] = 'Your Date must contain dd-mm-yyyy or mm-dd-yyyy.';}
  } else {$errors[] = 'You forgot to enter your Date.';}
  
  // Check for a proper time
  if (!empty($_REQUEST['time'])) {
  $pass = $_REQUEST['time'];
  $pattern = "/^[a-zA-Z0-9\_]{6,20}/";// This is a regular expression that checks if the password is valid characters
  if (preg_match($pattern,$pass)){ $pass = $_REQUEST['pass'];}
  else{ $errors[] = 'Your password can only contain _, 1-9, A-Z or a-z, and  6-20 characters long long.';}
  } else {$errors[] = 'You forgot to enter your Last Name.';}


}

?>

         <form role="form" method="post" action="rostersuccess.php" onSubmit="return validate(this);" name="form">

<<<<<<< HEAD
       <label>Month:</label>
      <input type="text" class="form-control"  id="month" name="month" placeholder="Example: 'October' ">
<br>
      <br>

    
=======
      <label>Month:</label>
      <input type="text" class="form-control" id="month" name="month" placeholder="Example: 'June' ">
      <br>
      <br>

>>>>>>> origin/master
      <label>Date:</label>
      <input type="text" class="form-control"  id="date" name="date" placeholder="Example: '22-05-2016' ">
<br>
      <br>

       <label>Times:</label>
      <input type="text" class="form-control" id="time" name="time" placeholder="Example: '9am - 5pm' ">
      <br>
      <br>

      
    <div class="col-sm-offset-0 col-sm-10">
        <input type = "submit" class="btn btn-success" id = "clickme" value="Submit!" name="clickme"/>&nbsp;&nbsp;&nbsp;
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  Does someone need help?
</button>

</div>
      </div>
  </form>
  <script src = "myUsers.js"></script>

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
