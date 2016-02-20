<html>
<body bgcolor=#eeeee>
<center>
<form action="book.jsp" method=post>
<table border=1><tr><th align=left>Movie Name</th><th align=left>Start Date</th><th align=left>End Date</th><th align=left>Rating</th></tr>

		<%@ page import="java.sql.*" %>
		<%@ page import="library.DBInfo1" %>
		
		<%		
			
				
			
			
			Connection con=DBInfo1.getConnection();
			String query="select * from movie_master ";
			PreparedStatement ps=con.prepareStatement(query);
			
			
			ResultSet rs=ps.executeQuery();

			
			String movie="",start_date="",end_date="";
			double rating=0.0;
			
			while(rs.next())
			{
				movie=rs.getString(2);
				start_date=rs.getString(3);
				end_date=rs.getString(4);
				rating=rs.getDouble(6);
			
			%>
<tr><td><%=movie%></td><td><%=start_date%></td><td><%=end_date%></td><td><%=rating%></td><td><input type=submit value=Book!></td></tr>
<%}%>			
</table>
</form>
</center>
</body>
</html>