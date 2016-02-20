<html>
<body bgcolor=#eeeee>
<center>
<form >
<table>
		<%@ page import="java.sql.*" %>
		<%@ page import="library.DBInfo1" %>
		
		<%
		if(request.getParameter("id")==null)
		{
		out.println("No Data Selected ! Move Back");
		}
		else
		{
		
			int id=Integer.parseInt(request.getParameter("id"));
			
			Connection con=DBInfo1.getConnection();
			String theatre="",movie="",type="",medium="",isLive="";
			int row=0,col=0,price=0,rows=0;
			String query="select theatre_id from theatre_of_city where cinema_id="+id+"";
			PreparedStatement ps=con.prepareStatement(query);
			int id1=id;
			ResultSet rs=ps.executeQuery();
			while(rs.next())
			{
				id=rs.getInt(1);
			}
			
			query="select * from theatre_of_city where theatre_id='"+id+"'";
			ps=con.prepareStatement(query);
			rs=ps.executeQuery();
			while(rs.next())
			{
				row=rs.getInt(4);
				col=rs.getInt(5);
			}
			%>
			No of Rows:<input type=number name=row value='<%=row%>'>
			No of Cols:<input type=number name=col value='<%=col%>'>
			<%
			
			query="select * from cinema_master where cinema_id="+id1+"";
			ps=con.prepareStatement(query);
			rs=ps.executeQuery();
			while(rs.next())
			{
			
				medium=rs.getString(3);
				isLive=rs.getString(4);
			
			
			
			%>
			Select Medium
			<Select name=medium>
			<option value='<%=medium%>'><%=medium%></option>
			</select>
			Select Condition
			<select name=isLive>
			<option value='<%=isLive%>'><%=isLive%></option>
			</select>
			<%}
			
			
			
			
			int theatre_show_time_id=0,movie_id=0;
			query="select * from theatre_show_time where theatre_id='"+id+"'";
			ps=con.prepareStatement(query);
			rs=ps.executeQuery();
			while(rs.next())
			{
				theatre_show_time_id=rs.getInt(1);// to upadate the user choice
				movie_id=rs.getInt(5);
			}
			
			
			
			
			
			
			
			
			query="select * from movie_master where movie_id='"+movie_id+"'";
						ps=con.prepareStatement(query);
			rs=ps.executeQuery();
			String start_date="",end_date="";
			double rating=0.0;
			while(rs.next())
			{
				movie=rs.getString(2);
				
				rating=rs.getDouble(6);
			}
			%>		

			Movie<input type=text name=row value='<%=movie%>'>
			Start Date:<input type=date name=start_date >
			End Date<input type=date name=end_date >
			Rating<input type=number name=rating value='<%=rating%>'>
			
<%

					
			query="select * from ticket_rate where theatre_id='"+id+"'";
						ps=con.prepareStatement(query);
						
						int i=1;
			rs=ps.executeQuery();
			while(rs.next())
			{
				type=rs.getString(3);
				price=rs.getInt(4);
				rows=rs.getInt(5);
				
			
			%>
			Price for <%=type.toUpperCase()%>: <input type=number name=price<%=type%> value='<%=price%>'>
			
			
			Rows in <%=type.toUpperCase()%>: <input type=number name=row<%=type%> value='<%=rows%>'>
			
			
			<%}%>
			
		
	</table>
<input type=submit value=Update >
</form>
<%}%>
</center>
</body>
</html>