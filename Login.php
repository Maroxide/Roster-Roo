﻿<?php
session_start();
if(isset($_SESSION['email'])){
header("Location:http://rosterroo.site88.net/user.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Roster-Roo | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css">

<!-- Angular js import  -->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>

<!-- jQuery library -->
<link rel="stylesheet" src="socialbtn.css" type="text/css"/>
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

	<link rel="shortcut icon" href="food.png">
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
            <li><a href="http://rosterroo.site88.net/index.php">Home</a></li>

             <li><a href="http://rosterroo.site88.net/about.php">About Us</a></li>
            <li><a href="http://rosterroo.site88.net/contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
         
            <li><a href="http://rosterroo.site88.net/signup.php" data-toggle="tooltip" data-placement="bottom" title="Make your own work roster!!" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li class="active"><a href="http://rosterroo.site88.net/Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
        So you've made it to the Login part of the site. That means you made an account, and are trying to Login to create rosters, so you can get started that's good. We like you.<br>        Judging by you clicking on this, you need help. That's no problem. Just means you're not a techy perhaps.<hr>
        <br>
        What you're gonna want to do, is just enter in all of your silly little credentials (Email, Password) and I'll let the server do the rest.<br>
        Trust me, it's easy!
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
        <h1>Come to login?</h1>      
         <br>
         <form action="check_login.php"  method="post" >
    <div class="form-group">
      <label for="usr">E-mail:</label>
      <input type="email" class="form-control" id="email"  name="email">
    </div><form role="form">
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pass" id="pass" placeholder ="Enter in your password.">
    </div>
    <div class="col-sm-offset-0 col-sm-10">
        <input type = "submit" name ="submit" class="btn btn-success"  value="Submit!"/>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  Does someone need help?
</button>
   </div>
<script>
bootstrap_alert = function() {}
bootstrap_alert.warning = function(message) {
            $('#alert_placeholder').html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">×</a><span>'+message+'</span></div>')
        }

$('#clickme').on('click', function() {
            bootstrap_alert.warning('Sadly, we are not quite ready to commit to you yet, we have to work on ourselves first.');
});
</script>​
      </div>
  </form>
  </form>
  <script>
function validateCtrl($scope) {
    $scope.email = '';
}
</script>
      </div>
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
