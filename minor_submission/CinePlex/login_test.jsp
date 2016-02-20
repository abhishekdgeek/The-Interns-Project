<html>
<body bgcolor=#eeeee>
<center>
<form method=post>
<%@ page import="library.DBInfo1"%>

<%@ page import="java.sql.*"%>
<%@ page import="library.Random_id"%>
<%@ page import="java.io.*"%>


<%

String username="";
String password="";
			Connection con=DBInfo1.getConnection();
			String query="select * from admin_data ";
			PreparedStatement ps=con.prepareStatement(query);
			ResultSet res=ps.executeQuery();
			while(res.next())
			{
	{
	username=res.getString(2);
	password=res.getString(3);
	}
}


 String s1=request.getParameter("fname");
String s2=request.getParameter("pass");
if(s1.equalsIgnoreCase(username) && s2.equals(password))
{
	response.sendRedirect("admin1.jsp?id="+s1);
	%>
	<input type=submit>
	<%
}
else
{
%>
<font color=red>Enter Correct Fields!</font>
<%@ include file="login.jsp"%>
<%	
}
%>
</form>
</center>
</body>
</html>