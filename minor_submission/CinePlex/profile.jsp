<html>
<body bgcolor=#eeeee>
<center>
<form method=post>

		<%@ page import="java.sql.*" %>
		<%@ page import="library.DBInfo1" %>
		
		<%
			String username="";
			Connection conn=DBInfo1.getConnection();
			String query="select * from user_table ";
			PreparedStatement ps=conn.prepareStatement(query);
			ResultSet res=ps.executeQuery();
			while(res.next())
			{
				username=res.getString(2);
				break;
			}
			
		%>
Welcome : <font color=green><%=username.toUpperCase()%></font>
<hr>
<a href="update_user.jsp">Update Data</a>
<hr>
<a href="admin1.jsp?id=<%=username%>">Back</a>
</form>
</center>
</body>
</html>