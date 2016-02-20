<html>
<script>
function check()
{
x=document.user.pass1.value;
y=document.user.pass2.value;
if(x.equals(y))
{
}
else
{
alert("Mismatch Password!");
return false;
}
}
</script>
<body bgcolor=#d8f1f8>
<form name=user action=verification.jsp onsubmit="return check()" method=post>
<center>
<table>
<tr><td>Enter Username</td><td><input required type=text name=uname></td></tr>
<tr><td>Enter Password</td><td><input required type=password name=pass1></td></tr>
<tr><td>Retype Password</td><td><input required  type=password name=pass2></td></tr>
<tr><td>Email</td><td><input type=text required name=email></td></tr>
<tr><td>Contact Number</td><td><input required type=number name=phone></td></tr>
<tr><td>&nbsp;</td><td><input type=submit  value=Register></td></tr>
</table>
</center>
</form>
</body>
</html>