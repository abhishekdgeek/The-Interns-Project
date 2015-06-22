<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>User Dasboard</title>
<!-- Latest compiled and minified CSS -->
<link rel="icon" sizes="144x144" type="image/png" href="assets/images/fav.png">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=BlackOpsOne|Playball|RobotoSlab">
<link rel="stylesheet" type="text/css" href="assets/css/userstyle.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
 <script type="text/javascript">
   $(document).ready(function() {
                var options = {
                    chart: {
                        renderTo: 'container',
                        type: 'line'
                    },
                       title: {
            text: 'Statistics'
        }, 
                    xAxis: {
                        type: 'value'
                    },
                series: [{}]
                };

            $.getJSON('dummy.json', function(data) {
                options.series[0].data = data;
                var chart = new Highcharts.Chart(options);
            });

        }); </script>
        <script type="text/javascript">
   $(document).ready(function() {
                var options = {
                    chart: {
                        renderTo: 'container-fluid',
                        type: 'area'
                    },
                       title: {
            text: 'Like meter'
        }, 
                    xAxis: {
                        type: 'value'
                    },
                series: [{}]
                };

            $.getJSON('dummy.json', function(data) {
                options.series[0].data = data;
                var chart = new Highcharts.Chart(options);
            });

        }); </script>
</head>
  <body>

  <div class="container">
  <!-- Static navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">User Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="logo" src="assets/images/solomo-logo.svg" alt="solomo logo">
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
                       <ul class="nav navbar-nav navbar-right">
              <!--sign in section-->
<li ><a href="#">Home</a></li>
                <li><a href="#">Link Two</a></li>
                <li><a href="#">Link Three</a></li>
 </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav> </div>
       <!-- /container -->
        <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
 <div class="row">
   <div class="col-xs-12 col-md-6">
    <div class="row">
     <div class="panel panel-default">
    <div class="panel-heading " id="head1"> <img src="assets/images/twitter.png" height="30px" width="30px">Twitter Graphs</div>
    <div class="panel-body">
    <div class="row">
    <div class="col-xs-4">
<div class="well">
<a href="" style="text-decoration:none">Daily</a></div></div>
<div class="col-xs-4">
<div class="well">
<a href="" style="text-decoration:none">Weekly</a></div></div>
<div class="col-xs-4">
<div class="well">
<a href="" style="text-decoration:none">Monthly</a></div></div></div>
<div id="container" style="width:auto; height:auto"></div>
<div class="form-group">
      <label for="sel1">Select Page(select one):</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select></div>
</div></div></div></div>
 <div class="col-xs-12 col-md-6">
    <div class="row">
     <div class="panel panel-default">
    <div class="panel-heading " id="head2">  <img src="assets/images/fb.png" height="30px" width="30px">Facebook Graphs</div>
    <div class="panel-body">
    <div class="row">
    <div class="col-xs-4">
<div class="well">
<a href="" style="text-decoration:none">Daily</a></div></div>
<div class="col-xs-4">
<div class="well">
<a href="" style="text-decoration:none">Weekly</a></div></div>
<div class="col-xs-4">
<div class="well">
<a href="" style="text-decoration:none">Monthly</a></div></div></div>
<div id="container-fluid" style="width:auto; height:auto"></div>
 <div class="form-group">
      <label for="sel1">Select Page(select one):</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select></div>
    </div></div></div></div>
   
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
 <script src="assets/js/jquery-2.1.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
