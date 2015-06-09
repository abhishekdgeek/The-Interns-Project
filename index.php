<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> </script>
	<script src="assets/js/script.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>A Solomo Media Initiative</title>
<!-- Latest compiled and minified CSS -->
<link rel="icon" sizes="144x144" type="image/png" href="assets/images/fav.png">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=BlackOpsOne|Playball|RobotoSlab">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
  <body>
  <div class="container">
  <!-- Static navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Log In Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="logo" src="assets/images/solomo-logo.svg" alt="solomo logo"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
                       <ul class="nav navbar-nav navbar-right">
             			<!--sign in section-->
<li>
 <form  name= "n2" action="signin.php"  method= "post">
<div class="form-group has-warning has-feedback">
<label for="element-1" class="control-label">E-Mail</label>
<input type="email" name= "email1" id="email1" required class="form-control"   placeholder="Enter a valid e-mail address">
<span class="glyphicon glyphicon-user form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></li>
<li>
<div class="form-group has-warning has-feedback">
<label for="element-2" class="control-label">Password</label>
<input type="password"  name= "password1" id="password1" required class="form-control"   placeholder="Enter your password">
 <p id="demo1"></p>
<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
</div>
</li>
<li><div class="btn-toolbar "> <input type="submit" value="Sign in" id= "followbtn1" class="btn btn-primary btn-md"></div></form>
<!-- controls grid system maintaining gap between columns-->
</li>
                </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav> </div>
      <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
 <div class="row">
	 <div class="col-xs-12 col-md-6">
       <img src="assets/images/back1.jpg" class="img-responsive" alt="SOCIAL"></div>
         <div class="col-xs-12 col-md-6">
		 <div class="row">
		 <div class="panel panel-default">
    <div class="panel-heading">Sign Up</div>
    <div class="panel-body">
	<form class="register" name= "n1"  method="post" id= "followform" action="signup.php">
	<div class="row"><div class="col-xs-12">
<div class="form-group has-warning has-feedback">
<label for="element-1" class="control-label">First Name</label>
<input type="text" class="form-control"  required   name="fname" id="fname" placeholder="Enter your First name">
<span class="glyphicon glyphicon-user form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></div></div>  
<div class="row"><div class="col-xs-12">
<div class="form-group has-warning has-feedback">
<label for="element-1" class="control-label">Last Name</label>
<input type="text" class="form-control"  required    name="lname" id="lname" placeholder="Enter your Last name">
<span class="glyphicon glyphicon-user form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></div></div>    
<div class="row"><div class="col-xs-12">
<div class="form-group has-warning has-feedback">
<label for="element-1" class="control-label">E-Mail</label>
 <input type="email" class="form-control"    required name="email" id="email"  placeholder="Enter your Email id">
<span class="glyphicon glyphicon-envelope form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></div></div>
<div class="row"><div class="col-xs-12">
<div class="form-group has-warning has-feedback">
<label for="element-1" class="control-label">Password</label>
  <input type="password" class="form-control"    required name="password" id="password" placeholder="Password" >
 <p id="demo"></p>
<span class="glyphicon glyphicon-asterisk form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></div></div> 
<div class="row"><div class="col-xs-12">
 <input type="submit"  id= "followbtn" class="btn btn-success btn-md" value="Create Account" onclick="$('#loading').show();" >
<div id="loading" style="display:none;"><img src='assets/images/pre.gif' height="50px" width="50px"/></div>>
        </form>
		</div>
  </div>
</div></div></div></div></div></div>
  <!-- /container -->
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
