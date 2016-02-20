<html>
<body bgcolor="#eeeee">
<%@ include file="index1.jsp"%>
<center>

<form action="login_test.jsp" method="post" >
<table>

<div id=header><header><h1>Admin Login!</h1></header></div>
<tr><td>Enter Username</td><td><input type=text name="fname" required></td></tr>
<br><tr><td>Enter Password</td><td><input type=password name="pass" required></td></tr>
<tr><td><input type=submit></td></tr>

</table>
</form>
</center>
</body>
<style>
#header{
	
		background : #eed3b5;
	}</style>
</html>