<html><body>
<%@ include file="index1.jsp"%><form action="select_date.jsp" method=post>
<%@ page import="library.DBInfo1"%>
		<%@ page import="java.sql.*"%>
		<center>
		<select name=movie>
	<%
	
		int cinema_id=Integer.parseInt(request.getParameter("cinema_id"));
		int user_id=Integer.parseInt(request.getParameter("user_id"));
		int id=Integer.parseInt(request.getParameter("city"));
		
	
		String movie="",start_date="",end_date="";int rating=0,movie_id=0;
		Connection con1=DBInfo1.getConnection();
		String query1="select * from movie_master";
		PreparedStatement ps1=con1.prepareStatement(query1);
		ResultSet res1=ps1.executeQuery();
		while(res1.next())
		{
			movie_id=res1.getInt(1);
			movie=res1.getString(2);
			rating=res1.getInt(6);
		%>
	<option value=<%=movie_id%>><%=movie%>&nbsp;&reg;&nbsp;<%=rating%></option>
		<%	
		}
	%>
	</select>
	
	
	<input type=hidden name=cinema_id value=<%=cinema_id%>>
	<input type=hidden name=user_id value=<%=user_id%>>
	<input type=hidden name=city value=<%=id%>>
	
	
	<input type=submit value=select>
	<hr>
	<br>
	<a href="book1.jsp?user_id=<%=user_id%>&city=<%=id%>">Back</a>
	</center>
	</form>
	</body>
	</html>