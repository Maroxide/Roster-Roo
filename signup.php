<?php
session_start();
if(isset($_SESSION['email'])){
header("Location:http://rosterroo.site88.net/user.php");
}
?>
<!DOCTYPE html>
   <html>
  <head>
    <title>Roster-Roo | Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css">
<link rel="stylesheet" href="social-buttons.css" type="text/css"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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

<script type="text/javascript">
var ck_name = /^[A-Za-z0-9 ]{3,20}$/;
var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]
{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
var ck_username = /^[A-Za-z0-9_]{1,20}$/;
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
var ck_cname = /^[A-Za-z0-9 ]{3,20}$/;

function validate(form){
var fname = form.fname.value;
var email = form.email.value;
var lname= form.lname.value;
var pass= form.pass.value;
var cname= form.pass.value;
var errors = [];
 
 if (!ck_name.test(fname)) {
  errors[errors.length] = "You must enter a valid First Name .";
 }
 if (!ck_name.test(cname)) {
  errors[errors.length] = "You must enter a valid Company Name .";
 }
 if (!ck_email.test(email)) {
  errors[errors.length] = "You must enter a valid email 
address.";
 }
 if (!ck_username.test(lname)) {
  errors[errors.length] = "You must enter in a valid Last name.";
 }
 if (!ck_password.test(pass)) {
  errors[errors.length] = "You must enter a valid Password ";
 }
 if (errors.length > 0) {

  reportErrors(errors);
  return false;
 }
  return true;
}
function reportErrors(errors){
 var msg = "Please Enter Valid Data...\n";
 for (var i = 0; i<errors.length; i++) {
 var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
}
 alert(msg);
}
</script>

	<link rel="shortcut icon" href="favicon.ico">
  </head>

  <body>
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
            <li><a href="http://rosterroo.site88.net/signup.php" data-toggle="tooltip" data-placement="bottom" title="This is not quite ready yet, be patient, we'll get it working." ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
<<<<<<< HEAD
      
=======
      <!-- Updated Wording -Niall -->
>>>>>>> origin/master
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
        <h1>Enter your credentials in the corresponding spaces below:</h1>      
         <br>
 <?php
if (isset($_REQUEST['submitted'])) {
// Initialize error array.
  $errors = array();
  // Check for a proper First name
  if (!empty($_REQUEST['fname'])) {
  $fname = $_REQUEST['fname'];
  $pattern = "/^[a-zA-Z\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$fname)){ $fname = $_REQUEST['fname'];}
  else{ $errors[] = 'Your Name can only contain A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your First Name.';}
  
  // Check for a proper Last name
  if (!empty($_REQUEST['lname'])) {
  $lname = $_REQUEST['lname'];
  $pattern = "/^[a-zA-Z\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$lname)){ $fname = $_REQUEST['lname'];}
  else{ $errors[] = 'Your Name can only contain A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your Last Name.';}

  if (!empty($_REQUEST['cname'])) {
  $fname = $_REQUEST['cname'];
  $pattern = "/^[a-zA-Z\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$fname)){ $fname = $_REQUEST['cname'];}
  else{ $errors[] = 'Your Name can only contain A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your Company Name.';}
  
  //Check for a valid Email
  if (!empty($_REQUEST['email'])) {
  $email = $_REQUEST['email'];
  $pattern = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
  if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
  else{ $errors[] = 'Your Email can only be numbers and letters.';}
  } else {$errors[] = 'You forgot to enter your Email.';}
  
  // Check for a proper password
  if (!empty($_REQUEST['pass'])) {
  $pass = $_REQUEST['pass'];
  $pattern = "/^[a-zA-Z0-9\_]{6,20}/";// This is a regular expression that checks if the password is valid characters
  if (preg_match($pattern,$pass)){ $pass = $_REQUEST['pass'];}
  else{ $errors[] = 'Your password can only contain _, 1-9, A-Z or a-z, and  6-20 characters long long.';}
  } else {$errors[] = 'You forgot to enter your Last Name.';}


}

?>

         <form role="form" method="post" action="signupsuccess.php" onSubmit="return validate(this);" name="form">

      <label>First Name:</label>
      <input type="text" class="form-control" id="fname" name="fname">
      <br>
      <br>

      <label>Last Name:</label>
      <input type="text" class="form-control"  id="lname" name="lname">
<br>
      <br>

       <label>Company Name:</label>
      <input type="text" class="form-control" id="cname" name="cname">
      <br>
      <br>

      <label>E-mail:</label>
      <input type="text" class="form-control"  id="email" name="email">
<br>
      <br>
      <labe>Password:</label>
      <input type="password" class="form-control"  id="password" placeholder ="Enter in dat password yo." name="pass">
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
