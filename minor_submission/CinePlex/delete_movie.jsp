<html><body>
<%@ include file="index1.jsp"%><center>
<%@ page import="java.util.*"%>
		<%@ page import="java.sql.*" %>
		<%@ page import="library.DBInfo1" %>

<% 
if(request.getParameter("select")==null)
			{
			out.println("no data");
			}
			else{
String s=request.getParameter("id");
int theatre_id=0;
		if(s.equals("movie"))
	{
			
		
			int s1=Integer.parseInt(request.getParameter("select"));
			Connection con=DBInfo1.getConnection();
		String query="select theatre_id from theatre_show_time where movie_id="+s1+" ";
		PreparedStatement ps=con.prepareStatement(query);
		ResultSet res=ps.executeQuery();
		
		while(res.next())
		{
			
			theatre_id=res.getInt(1);
			}
			

			
			query="delete from movie_master where movie_id="+s1+" ";
			ps=con.prepareStatement(query); 
			ps.executeUpdate();
			query="delete from theatre_show_time where theatre_id="+s1+" ";
			ps=con.prepareStatement(query); 
			ps.executeUpdate();
			query="delete from ticket_rate where theatre_id="+s1+" ";
			ps=con.prepareStatement(query); 
			ps.executeUpdate();
			query="delete from user_selected where theatre_id="+s1+" ";
			ps=con.prepareStatement(query); 
			ps.executeUpdate();
	}
			
		else if(s.equals("cinema"))
	{
			 
			int s1=Integer.parseInt(request.getParameter("select"));
			Connection con=DBInfo1.getConnection();
			String query="delete from cinema_master where cinema_id="+s1+" ";
			PreparedStatement ps=con.prepareStatement(query);
			ps.executeUpdate();
			
			
			query="select theatre_id from theatre_of_city where cinema_id='"+s1+"'";
			
			ps=con.prepareStatement(query);
			int id=0;
			ResultSet res=ps.executeQuery();
			while(res.next())
			{
					id=res.getInt(1);
			}
	
			query="delete from theatre_of_city where cinema_id='"+s1+"' ";
			ps=con.prepareStatement(query);
			ps.executeUpdate();
			
			query="delete from theatre_show_time where theatre_id='"+id+"'";
				ps=con.prepareStatement(query);
			ps.executeUpdate();
			
			query="delete from ticket_rate where theatre_id='"+id+"'";
				ps=con.prepareStatement(query);
			ps.executeUpdate();
			query="delete from user_selected where theatre_id='"+id+"'";
				ps=con.prepareStatement(query);
			ps.executeUpdate();
			
	}
		else if(s.equals("city"))
	{
			 
 String s1=request.getParameter("select");
 out.println(s1);
 int id=0,id1=0;
			Connection con=DBInfo1.getConnection();
			String query="select city_id from city_master where city='"+s1+"'";
			
			PreparedStatement ps=con.prepareStatement(query);
			
			ResultSet res=ps.executeQuery();
			while(res.next())
			{
					id=res.getInt(1);
			}
			query="delete from city_master where city='"+s1+"'";
			ps=con.prepareStatement(query);
			
			ps.executeUpdate();
			
			String query2="select theatre_id from theatre_of_city where city_id='"+id+"'";
			ps=con.prepareStatement(query2);
			res=ps.executeQuery();
			while(res.next())
			{
					id1=res.getInt(1);
			}
			query="delete from theatre_of_city where city_id='"+id+"'";
			ps=con.prepareStatement(query);
			
			ps.executeUpdate();
			
			
			int spt=0;
			query="select cinema_id from theatre_show_time where theatre_id='"+id1+"'";
			ps=con.prepareStatement(query);
			res=ps.executeQuery();
			while(res.next())
			{
				spt=res.getInt(1);
			}
			
			
			query="delete from cinema_master where cinema_id='"+spt+"'";
			ps=con.prepareStatement(query);
			
			query="delete from theatre_show_time where theatre_id='"+id1+"'";
			ps=con.prepareStatement(query);
			
			ps.executeUpdate();
			
			query="delete from ticket_rate where theatre_id='"+id1+"'";
			ps=con.prepareStatement(query);
			
			ps.executeUpdate();
			
			query="delete from user_selected where theatre_id='"+id1+"'";
			ps=con.prepareStatement(query);
			
			ps.executeUpdate();
			
			
			
			}
			out.println("Data Deleted! Move Back And Refresh");
			}
 %>
 </center>
 </body>
 </html>