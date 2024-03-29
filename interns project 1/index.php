<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>A Solomo Media Initiative</title>
<!-- Latest compiled and minified CSS -->
<link rel="icon" sizes="144x144" type="image/png" href="assets/images/fav.png">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=BlackOpsOne|Playball|RobotoSlab">
<link rel="stylesheet" type="text/css" href="assets/css/home.css">
<script src="assets/js/home.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.1/jquery.form-validator.min.js"></script>
<script> $.validate(); </script>
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
 <form  name= "n2" action="signin1.php" method= "post">
<div class="form-group has-warning has-feedback">
<input type="email" name= "email" class="form-control" data-validation="email" placeholder="Email">
<span class="glyphicon glyphicon-user form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></li>
<li>
<div class="form-group has-warning has-feedback">
<input type="password"  name= "password"  class="form-control" placeholder="Password" data-validation="length" data-validation-length="min10">
<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
</div>
</li>
<li><div class="btn-toolbar "><input type="submit" value="Sign in" class="btn btn-primary btn-md"></div></form>
<!-- controls grid system maintaining gap between columns-->
</li>
 </ul>
  </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav> </div>
    <div class="jumbotron">
 <div class="row">
	 <div class="col-xs-12 col-md-6">
       <img src="assets/images/back1.jpg" class="img-responsive" alt="SOCIAL"></div>
         <div class="col-xs-12 col-md-6" id="second">
		 <div class="row">
		 <div class="panel panel-default">
    <div class="panel-heading">Sign Up</div>
    <div class="panel-body">
	<form class="register" name= "n1"  method="post" id= "followform" action="signup1.php">
	<div class="row"><div class="col-xs-12">
<div class="form-group has-warning has-feedback">
<input type="text" class="form-control"   name="fname" id="fname" placeholder="First name">
<span class="glyphicon glyphicon-user form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></div></div>  
<div class="row"><div class="col-xs-12">
<div class="form-group has-warning has-feedback">
<input type="text" class="form-control"  name="lname" id="lname" placeholder="Last name">
<span class="glyphicon glyphicon-user form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></div></div>    
<div class="row"><div class="col-xs-12">
<div class="form-group has-warning has-feedback">
 <input type="email" class="form-control" name="email" id="email"  placeholder="Enter Email">
<span class="glyphicon glyphicon-envelope form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></div></div>
<div class="row"><div class="col-xs-12">
<div class="form-group has-warning has-feedback">
  <input type="password" class="form-control"  name="password" id="password" placeholder="Password" >
<span class="glyphicon glyphicon-asterisk form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></div></div> 
<div class="row"><div class="col-xs-12">
 <input type="submit"  id= "followbtn" class="btn btn-success btn-md" value="Create Account">
        </form>
		</div>
  </div>
</div></div></div></div></div></div>
    <script src="assets/js/jquery.js"></script>
 <script src="assets/js/jquery-2.1.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/validate.js"></script>
  </body>
</html>
