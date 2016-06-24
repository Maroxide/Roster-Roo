<?php
session_start();
if(isset($_SESSION['email'])){
header("Location:http://rosterroo.site88.net/user.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Roster-Roo | Home</title>
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
  <script>
  bootstrap_alert = function() {}
bootstrap_alert.warning = function(message) {
            $('#alert_placeholder').html('<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span>'+message+'</span></div>')
        }
    
$('#clickme').on('click', function() {
            bootstrap_alert.warning('Give us a minute to fix the site.');
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
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
     
    </div>
  </div>
</div>
<div id ="alert_placeholder">
</div>
  
    <div class="container">
   <div class="jumbotron">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Slide Content -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <center><img src="Image1.jpg" alt="Image1"></center>
       <div class="carousel-caption">

  </div>
    </div>

    <div class="item">
      <center><img src="Image2.jpg" alt="Image2"></center>
       <div class="carousel-caption">

  </div>
    </div>

    <div class="item">
      <center><img src="Image3.jpg" alt="Image3"></center>
       <div class="carousel-caption">
  </div>
    </div>

<div class="item">
      <center><img src="Image4.jpg" alt="Image3"></center>
       <div class="carousel-caption">
  </div>
    </div>

</div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


  
 </div>
<<<<<<< HEAD
    
=======
  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
    What's this?
  </button>    
>>>>>>> origin/master
  <br>
    </div>


<!-- these are all of the columns, we can debate later whether or not these will stay -->

    <div class="container">
      <div class="row">
        <div class="col-md-3">
         <h2 >Welcome</h2>
          <p>Welcome to Roster-Roo. We offer simple roster making for your workplace.</p>
          <p><a href="about">more...</a></p>
        </div>
        <div class="col-md-3"> 
          <h2><a href="tutorial">Tutorial</a></h2>
          <p>So, to get you started, we're gonna have to go through all the steps to setting up, creating and using a profile.</p>
     <p>&nbsp;</p>
     <p>We'll walk you through the full process with these simple steps:</p>
          
          <p><a href="tutorial">more...</a></p></div>
        <div class="col-md-3"> 
          <h2><a href="http://www.twitter.com/RosterRoo">Twitter Feed</a></h2>
          
          <!-- fix, we did and it's awesome -->

            <a class="twitter-timeline"  href="https://twitter.com/RosterRoo" data-widget-id="733386632544550914">Tweets by @RosterRoo</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
        </div>
     <div class="col-md-3">
         <h2 ><a href="http://www.facebook.com/rosterroowebsite">Facebook Feed</a></h2>
           <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com
%2Frosterroowebsite&width=300&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=605" scrolling="yes" 

frameborder="0" style="border:none; overflow:hidden; width:300px; height:600px; background: white; float:left; " 

allowtransparency="true">
  </iframe>
        </div>


      
      <div class="clearfix visible-lg"></div>
    <center>
    <footer class ="footer">
    <div class = "container">
    <p class=" text-muted">Roster-Roo  &copy; 2016</p>
    </div>
    </footer>
    </center>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
