<html>
<head>
	<title >Tickets4You</title>
	</head>
	<body bgcolor=#d8f1f8>
	<div id="mainbody">
			<header id="topheader"><div id="hd1"><h1 align="center"><font color="#eeefff" >Grab Your Tickets!<h1></font>
		</div></header>

		<div id="navigation">
		<nav id="nav_list">
			<ul>
				<li><a href="index.jsp">Home</a></li>
				<li><a href="member_login.jsp">Movies</a></li>
	
				<li><a href="contactus.jsp" >Contact Us</a></li>
				<li><a href="login.jsp">Sign-Up</a></li>
				
			</ul>
			</nav>
	
		</div>
		</body>

	<style>
	*{
	margin:0px;
	padding:0px;
	
	}
	body{
	text-align:left;
	width:100%;
	display:block;
	background:#de67ca7;
	}
	
	#mainbody{
	display-block;
	margin:10px auto;
	width:1200px;
	height:750px;
	background:silver;
	border:3px solid black;
	}
	#topheader
	{
	
	border-bottom:2px solid blue;
	padding:20px;
	background:radial-gradient(center,red 0%,#eeeee 50%);
	text-align:center;
	}
	#hd1
	{
	display:block;
	width:300px;
	height:30px;
	border:1px solid black;
	background:-webkit-linear-gradient(top,red,black);
	padding:15px;
	margin:20px auto;
	border-radius:10px;
	color:#d8f1f8;
	box-shadow:rgb(110,110,110)10px 10px 8px;
	-webkit-box-shadow:rgba(110,110,110,0.8)10px 10px 8px;
	}
	#navigation{
	
	display:block;
	background:#666;
	padding:5px;
	border-bottom:2px solid green;
	height:45px;
	}
	
	#table{
	display:block;
	float: left;
	}
	#nav_list{
		
	width:410px;
	display:block;
	margin:0px auto;
	height:30px;
		
	}
	#nav_list ul{
		
		list-style-type:none;
		float: left;
		
	}
	
	#nav_list ul li{
		
		float: left;
	}
	#nav_list ul li a{
		display:block;
		border:2px solid #000;
		text-decoration:none;
		margin:8px;
		height:20px;
		font-size:0.8em;
		font-weight:bold;
		color:#fde;
		width:80px;
		background:-webkit-gradient(linear,left top,left bottom,from(#666),to(#333));
		border-radius:5px;
		box-shadow:1px 1px 4px silver;
		-webkit-box-shadow:rgba(110,110,110,0.8)5px 5px 4px;
		text-align:center;
	}
	#nav_list li a:havor{
	
	background:-webkit-gradient(linear,left top,left bottom,from(#000),to(#333));
	-webkit-box-shadow:rgb(110,110,110,0.6)10px 10px 8px;
	}
	
	</style>
</html>