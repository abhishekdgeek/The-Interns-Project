<html>
<body >
<%@ include file="index1.jsp"%>
<center>

<form action="member.jsp" method="post" >
<table>

<div id=header><header><h1>Staff Login!</h1></header></div>
<tr><td>Enter Username</td><td><input type=text name="fname" required></td></tr>
<br><tr><td>Enter Password</td><td><input type=password name="pass" required></td></tr>
<tr><td><input type=submit></td></tr>
</table>
<hr>
<nav id="nav">
<li>
<ul>
<a href="newuser.jsp">New User?</a>
</ul>

</li>
</nav>

</form>
</center>
</body>
<style>
	#nav li{
		display:inline-block;
		list-style:none;
	}

</style>
</html>