<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ShareMagic</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
<style type="text/css">
#second {
	margin:45px 0 0 0;
}
	.row {
 margin-right: 0px;margin-left: 0px;text-align: center;
	}
	.well { min-height: 20px; padding: 20px; 
		    font-family: cursive;
		    font-size: 20px;
		    margin-bottom: 20px;  border: 5px solid; border-radius: 4px;
		background-image: linear-gradient(to bottom,#FDCF08,#FDCF08 100%)}
		.jumbotron {
			    background-color: #FFF;}
			    h1 {
			        font-size: 60px;
			        font-family: fantasy;
			    }
			    .panel {
			    	    padding: 0px 0 20px 0px;
                        border: 4px solid #323232;
			    }
			.panel-default>.panel-heading {
				    border: 4px solid black;
			 color: white;
    font-family: cursive;
    font-size: 25px;
			 background-image: linear-gradient(to bottom,#343434 0,#2A2A2A 100%);}    
   
</style>
</head>
  <body>
  <div class="container">
  <!-- Static navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><img class="logo" src="assets/images/solomo-logo.svg" alt="solomo logo"></a>
          </div></div></nav></div>
          <div class="jumbotron">
           <div class="row">
	 <div class="col-xs-12">
          <h1 align="center">ShaRe MaG!c</h1></div></div>
          <div class="row" id="second">
    <div class="col-xs-12 col-md-6">  
    <div class="row">    
    <div class="col-xs-12">
<div class="well">
Step 1: Enter url to be shared.</div></div>
<div class="col-xs-12">
<div class="well">
Step 2: Upload product image.</div></div>
<div class="col-xs-12">
<div class="well">
Step 3: GO!!!</div></div>
	</div></div>
	 <div class="col-xs-12 col-md-6">  
	 <div class="panel panel-default">
    <div class="panel-heading">Enter Details</div>
    <div class="panel-body">
	<form class="register" method="post" name="post_form" enctype="multipart/form-data" action="uploadfile2.php">
	<div class="row"><div class="col-xs-12">
<div class="form-group has-warning has-feedback">
<input type="url" class="form-control" name="url"   required pattern="https?://.+" placeholder="Enter URL Here...">
<span class="glyphicon glyphicon-ok form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div>
</div></div>
<div class="row"><div class="col-xs-12">
<div class="form-group has-warning has-feedback">
<input type="email" class="form-control" name="email"   required pattern="[^ @]+@[^ @]+.[a-z]+" placeholder="Enter Email">
<span class="glyphicon glyphicon-envelope form-control-feedback"></span><!-- with form control feedback glyphicon inside the textfields-->
</div></div></div>
<div class="row"><div class="col-xs-12">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
<input type="file" name="image" placeholder="upload image" required/> 
</div>
</div></div>

<div class="row"><div class="col-xs-12"><input type="submit" class="btn btn-success btn-md" name="submit" value="Submit" /></div></div> 
</div></div>
</form></div></div></div></div></div>
    <script src="assets/js/jquery.js"></script>
 <script src="assets/js/jquery-2.1.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/validate.js"></script>
  </body>
</html>

        