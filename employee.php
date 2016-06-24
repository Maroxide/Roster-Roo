<?php
session_start();
if(!$_SESSION['email']){
header("location:http://rosterroo.site88.net/Login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Roster-Roo | <?php echo $_SESSION['cname']; ?> Employee</title>
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
         <?php echo'<a class="navbar-brand" href="User.php?id='.$_SESSION["userid"].'">Roster-Roo</a>'?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <?php echo '<li ><a href="http://rosterroo.site88.net/user.php?id='.$_SESSION["userid"].'">Home</a></li>'; ?>  
           <?php echo '<li><a href="http://rosterroo.site88.net/roster.php?id=' .$_SESSION["userid"].'">Rosters</a></li>'; ?>  
            <?php echo '<li class="active"><a href="http://rosterroo.site88.net/employees.php?id=' .$_SESSION["userid"].'">Employees</a></li>'; ?>  
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
        Please enter your employees details(Name(Full Name*),Email Address).  <hr>
        
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
  



?>

         <form role="form" method="post" action="employeesuccess.php" onSubmit="return validate(this);" name="form">

      <label>Employee Name</label>
      <input type="text" class="form-control" id="empname" name="empname" placeholder="First and Last Name!! ">
      <br>
      <br>

  

       <label>Employee Email</label>
      <input type="text" class="form-control" id="empemail" name="empemail" placeholder="Employees Email Here!! ">
      <br>
      <br>

      
    <div class="col-sm-offset-0 col-sm-10">
<<<<<<< HEAD
        <input type = "submit" class="btn btn-success" id = "clickme2" value="Submit!" name="clickme2"/>&nbsp;&nbsp;&nbsp;
=======
        <input type = "submit" class="btn btn-success" id = "clickme" value="Submit!" name="clickme"/>&nbsp;&nbsp;&nbsp;
>>>>>>> origin/master
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
