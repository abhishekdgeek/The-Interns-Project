<html><body>
<%@ include file="index1.jsp"%>
<center><form>
<%@ page import="library.DBInfo1"%>
<%@ page import="java.sql.*"%>
<%@ page import="library.Random_id"%>
<%@ page import="java.io.*"%>
<%

int movie_id=Integer.parseInt(request.getParameter("movie_id"));
int row_p=Integer.parseInt(request.getParameter("row_p"));
int row_g=Integer.parseInt(request.getParameter("row_g"));
int row_s=Integer.parseInt(request.getParameter("row_s"));
int row=Integer.parseInt(request.getParameter("row"));
int col=Integer.parseInt(request.getParameter("col"));
int platinum=Integer.parseInt(request.getParameter("platinum"));
int gold=Integer.parseInt(request.getParameter("gold"));
int silver=Integer.parseInt(request.getParameter("silver"));
		int user_id=Integer.parseInt(request.getParameter("user_id"));
		int show_time_id=Integer.parseInt(request.getParameter("show_time_id"));
		String date_selected=request.getParameter("date_selected");
		
		String seat_selected[]=request.getParameterValues("seat");
		int len=seat_selected.length;
	
Connection con=DBInfo1.getConnection();
PreparedStatement ps=null;
ResultSet res=null;


int theatre_id=0;
		String query1="select theatre_id from theatre_show_time where movie_id="+movie_id+"";
		ps=con.prepareStatement(query1);
		res=ps.executeQuery();
		
		while(res.next())
		{
			theatre_id=res.getInt(1);
		}
			

	
int cinema_id=0;
		query1="select cinema_id from theatre_of_city where theatre_id="+theatre_id+"";
		ps=con.prepareStatement(query1);
		res=ps.executeQuery();
		
		while(res.next())
		{
			cinema_id=res.getInt(1);
		}
int w=col*row_p;
int x=col*row_g;
int y=col*row_s;
int turn_g=0;
int turn_s=0;
int turn_p=0;

int booking_id=new Random_id().getId(8);

while(len>0)
{
int pp=Integer.parseInt(seat_selected[len-1]);

if(pp<w)
{
turn_p++;
}


if(pp>w & pp<=w+x)
{
turn_g++;
}

if(pp>w+x )
{
turn_s++;
}

String query="insert into `user_selected`(`user_id`,`theatre_id`,`cinema_id`,`show_time_id`,`seat_no`,`selected_date`,`booking_id`) values (?,?,?,?,?,?,?)";
ps=con.prepareStatement(query);
ps.setInt(1,user_id);
ps.setInt(2,theatre_id);
ps.setInt(3,cinema_id);
ps.setInt(4,show_time_id);
ps.setInt(5,pp);
ps.setString(6,date_selected);
ps.setInt(7,booking_id);

ps.executeUpdate();
len--;
}


int price=(turn_s*silver)+(turn_g*gold)+(turn_p*platinum);
%>
<table><tr><td>
Selected Platinum Seats:</td><td><%=turn_p%></td></tr><tr><td>
Selected Gold Seats:</td><td><%=turn_g%></td></tr><tr><td>
Selected Silver Seats:</td><td><%=turn_s%></td></tr><tr><td>
Total Price:</td><td><%=price%></td>
</tr>
</table></form></center>
</body></html>






