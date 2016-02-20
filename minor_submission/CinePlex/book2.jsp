<%@ page import="library.DBInfo1"%>

<%@ page import="java.sql.*"%>
<%@ page import="library.Random_id"%>
<%@ page import="java.io.*"%>

<html><body><center>


<%
int id=Integer.parseInt(request.getParameter("city"));
int cinema_id=Integer.parseInt(request.getParameter("cinema_id"));
int theatre_id=0,row=0,col=0;

			Connection con=DBInfo1.getConnection();
			String query="select * from theatre_of_city where city_id="+id+" and cinema_id="+cinema_id+"";
			
			PreparedStatement ps=con.prepareStatement(query);
			
			ResultSet res=ps.executeQuery();
			while(res.next())
			{
	
	theatre_id=res.getInt(1);
	row=res.getInt(4);
	col=res.getInt(5);
	break;

}



			String type="",medium="",isLive="";
			int price=0,rows=0,ticket_rate_id=0;

			query="select * from ticket_rate where theatre_id="+theatre_id+"";
						ps=con.prepareStatement(query);
						
						
			res=ps.executeQuery();
			while(res.next())
			{
			ticket_rate_id=res.getInt(1);
				type=res.getString(3);
				price=res.getInt(4);
				rows=res.getInt(5);
				
			
			%>
<form action="SeatMatrix.jsp">Price For <%=type%> is:<%=price%>&nbsp;<input type=hidden name=ticket_rate_id value=<%=ticket_rate_id%>><input type=submit  value="Book"></form>
			
			<%
			
			}
			
			%>
			


</center></body></html>