<html>
<body bgcolor=#eeeee>
<center>
<form action="update_test.jsp" method=post>
<table>
		<%@ page import="java.sql.*" %>
		<%@ page import="library.DBInfo1" %>
		
		<%
			String username="";
			Connection con=DBInfo1.getConnection();
			String query="select * from admin_data ";
			PreparedStatement ps=con.prepareStatement(query);
			ResultSet res=ps.executeQuery();
			while(res.next())
			{
				%>
				<tr>
				<th align=left>Username</th>
				<th align=left>password</th>
				<th align=left>Email</th>
				<th align=left>Contacts</th>
							</tr>
<tr>

<td><input type=text value='<%=res.getString(2)%>' name=username> &nbsp;</td>
<td><input type=text value='<%=res.getString(3)%>' name=password> &nbsp;</td>
<td><input type=text value='<%=res.getString(4)%>' name=email> &nbsp;</td>
<td><input type=text value='<%=res.getString(5)%>' name=phone> &nbsp;</td>

</tr>			
			
				<%
			}
			
		%>
	</table>
<input type=submit value=Update >
</form>
</center>
</body>
</html>