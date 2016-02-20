<html><body>
<%@ include file="index1.jsp"%>
<center><form action="select_time.jsp" method=post>
	
	<%@ page import="library.DBInfo1"%>

<%@ page import="java.sql.*"%>
<%@ page import="library.Random_id"%>
<%@ page import="java.io.*"%>

	<%
			
		String movie="",start_date="",end_date="";
		int rating=0,movie_id=0,user_id=0,id=0,cinema=0;
		
		movie_id=Integer.parseInt(request.getParameter("movie"));
		user_id=Integer.parseInt(request.getParameter("user_id"));
		id=Integer.parseInt(request.getParameter("city"));
		cinema=Integer.parseInt(request.getParameter("cinema_id"));
		
		Connection con1=DBInfo1.getConnection();
		String query1="select * from movie_master where movie_id="+movie_id+"";
		PreparedStatement ps1=con1.prepareStatement(query1);
		ResultSet res1=ps1.executeQuery();
		while(res1.next())
		{
			
			start_date=res1.getString(3);
			
			end_date=res1.getString(4);
			
			if(start_date.equals(end_date))
			{
			%>
			<input type=date required name=date_selected readonly value='<%=start_date%>'>
			<%
			}
			else
			{
			%>
			<input type=date required min='<%=start_date%>' name=date_selected max='<%=end_date%>'>
			<%
		}
		}
	%>
	<input type=hidden name=movie_id value=<%=movie_id%>>
	<input type=hidden name=user_id value=<%=user_id%>>
	<input type=hidden name=city value=<%=id%>>
	<input type=hidden name=cinema_id value=<%=cinema%>>
	
		<input type=submit value=Select ><hr><br>
		<a href="select_movie.jsp?cinema_id=<%=cinema%>&city=<%=id%>&user_id=<%=user_id%>">Back</a>
	</form>
	</center></body></html>
	