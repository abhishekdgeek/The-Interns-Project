<html>
<body bgcolor=#eeeee>
<center>
<form method=post>
<%@ page import="library.DBInfo1"%>

<%@ page import="java.sql.*"%>
<%@ page import="library.Random_id"%>
<%@ page import="java.io.*"%>


<%
String s1=request.getParameter("fname");
String s2=request.getParameter("pass");
		Connection con=DBInfo1.getConnection();
			String query="select * from user_table ";
			PreparedStatement ps=con.prepareStatement(query);
			ResultSet res=ps.executeQuery();
			while(res.next())
			{
				if(s1.equalsIgnoreCase(res.getString(2)))
				{
					if(s2.equals(res.getString(3)))
					{	
						session.setAttribute("id",res.getInt(1));
						response.sendRedirect("book.jsp");
					}
					else
					{
					response.sendRedirect("member_login.jsp");
					}
				}
				else
				{
				response.sendRedirect("member_login.jsp");
				}
			}
%>
</form>
</center>
</body>
</html>