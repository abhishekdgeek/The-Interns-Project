<html>
<body bgcolor=#eeeee>
<center>
<table border=1><tr><th align=left>ID</th><th align=left>Username</th><th align=left>Email</th><th align=left>Contact Number</th><th align=left>Send Mail</th></tr>
<%@ page import="java.sql.*" %>
		<%@ page import="library.DBInfo1" %>
<%
			Connection con=DBInfo1.getConnection();
	String ss=request.getParameter("logout");
	if(ss.equals("Staff"))
	{
			PreparedStatement pes=con.prepareStatement("select * from user_table");
			ResultSet res=pes.executeQuery();
			String username="",email="";
			String phone="";int id=0;
			
			while(res.next())
			{
			id=res.getInt(1);
			username=res.getString(2);
			email=res.getString(4);
			phone=res.getString(5);
			
%>			<tr><td><%=id%></td><td><%=username%></td><td><%=email%></td><td><%=phone%></td><td><a href="mailing.jsp">Mail</a></td><tr/>
		
		
	<%}
	
	
	}
	else if(ss.equals("Profile"))
	{
		response.sendRedirect("profile.jsp");
	}
	else if(ss.equals("LogOut"))
	{
		response.sendRedirect("logout.jsp");
	}
	%>

</table>
</center>
</body>
</html>