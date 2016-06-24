<?php
session_start();
if(isset($_SESSION['email'])){
header("Location:http://rosterroo.site88.net/user.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Roster-Roo | About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css">
<link rel="stylesheet" src="socialbtn.css" type="text/css"/>

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

	<link rel="shortcut icon" href="food.ico">
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
            <li><a href="http://rosterroo.site88.net/index.php">Home</a></li>
            
            <li  class="active"><a href="http://rosterroo.site88.net/about.php">About Us</a></li>
            <li><a href="http://rosterroo.site88.net/contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Signup" data-toggle="tooltip" data-placement="bottom" title="This is not quite ready yet, sozzles." ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
        This page is all about the <i>tasty</i> creators of this website, the good folks down at <b>Roster-Roo</b>.
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
        <h1>About us:</h1>      
         <br>
      <p> This is our site that we designed and made as part of our academic intership, please use the contact page to get in touch with us!</p>
      <!--I put in a modal button, for the pop-up -->
       <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  What's this about?
</button> 
      	
      </div>


<div class="container">
      <div class="row">
        <div class="col-md-3">
         <div class="well">
       <h3 class="guilded"><span>Seamus</span></h3>
       <img src = "Seamus.jpg" data-toggle="tooltip" height="400" width ="300" data-placement="top" class="img-responsive" title="This is Seamus!">
    <br>
    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Seamus Fanning, Website designer and programmer!">
 Who is this?
</button>
<blockquote>
  <p>"We've definitely bitten off more than we can chew!"</p>
  <small>Seamus Fanning on <cite title="Roster-Roo.com">Roster-Roo.com</cite></small>
</blockquote>
    </div>
        </div>
        <div class="col-md-3"> 
           <div class="well">
       <h3 class="guilded"><span>Aaron</span></h3>
       <img src = "Aaron.jpg" data-toggle="tooltip" height="400" width ="300" data-placement="top" class="img-responsive" title="This is Aaron!">
    <br>
    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Aaron O'Doherty, Website designer and programmer!">
 Who is this?
</button>
<blockquote>
  <p>"This isn't House Music. I don't quite know what it is."</p>
  <small>Aaron O'Doherty on <cite title="Roster-Roo.com">Roster-Roo.com</cite></small>
</blockquote>
    </div>
  </div>
        <div class="col-md-3"> 
            <div class="well">
       <h3 class="guilded"><span>Alan</span></h3>
       <img src = "Alan.jpg" data-toggle="tooltip" height="400" width ="300" data-placement="top" class="img-responsive" title="This is Alan!">
    <br>
    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Alan Coleman, Website designer and programmer!">
 Who is this?
</button>
<blockquote>
  <p>" if (pub = open)<br>
      { drink = yes; }<br>
      else()<br>
      { goto = offlicence; }"</p>
  <small>Alan Coleman on <cite title="Roster-Roo.com">Roster-Roo.com</cite></small>
</blockquote>
    </div>
            </div>
     <div class="col-md-3">
           <div class="well">
       <h3 class="guilded"><span>Dylan</span></h3>
       <img src = "Dylan.jpg" data-toggle="tooltip" height="400" width ="300" data-placement="top" class="img-responsive" title="This is Dylan!">
    <br>
    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Dylan Walker, Website designer and programmer!">
 Who is this?
</button>
<blockquote>
  <p>"I'll have a Cappucino from Cafe Nero."</p>
  <small>Dylan Walker on <cite title="Roster-Roo.com">Roster-Roo.com</cite></small>
</blockquote>
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