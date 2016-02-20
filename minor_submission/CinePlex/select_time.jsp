<html><body>
<%@ include file="index1.jsp"%>
<center><form action="seat_test.jsp" method=post>
<select name=show_time_id>
	
	<%@ page import="library.DBInfo1"%>

<%@ page import="java.sql.*"%>
<%@ page import="library.Random_id"%>
<%@ page import="java.io.*"%>

	<%
		String movie="",date_selected="",time_id="";
		int rating=0,movie_id=0,user_id=0,city=0,cinema=0;
		movie_id=Integer.parseInt(request.getParameter("movie_id"));
		user_id=Integer.parseInt(request.getParameter("user_id"));
		city=Integer.parseInt(request.getParameter("city"));
		cinema=Integer.parseInt(request.getParameter("cinema_id"));
		date_selected=request.getParameter("date_selected");
		Connection con1=DBInfo1.getConnection();
		String query1="select * from theatre_show_time where movie_id="+movie_id+"";
		PreparedStatement ps1=con1.prepareStatement(query1);
		ResultSet res1=ps1.executeQuery();
		ResultSet res=null;
		while(res1.next())
		{
			
			time_id=res1.getString(3);
			query1="select * from show_time where show_time_id="+time_id+"";
			ps1=con1.prepareStatement(query1);
			res=ps1.executeQuery();
			while(res.next())
			{
					
					%>
					<option value='<%=res.getString(1)%>'><%=res.getString(2)%></option>
					<%
			}
			
		}	%>
			</select>
			<input type=hidden name=movie_id value=<%=movie_id%>>
			<input type=hidden name=user_id value=<%=user_id%>>
			<input type=hidden name=date_selected value=<%=date_selected%>>
			<input type=hidden name=city value=<%=city%>>
			<input type=hidden name=cinema_id value=<%=cinema%>>
		<input type=submit value=Select >
		<hr>
		<br>
		<a href="select_date.jsp?movie=<%=movie_id%>&cinema_id=<%=cinema%>&user_id=<%=user_id%>&city=<%=city%>">Back</a>
	</form>
	</center></body></html>
	