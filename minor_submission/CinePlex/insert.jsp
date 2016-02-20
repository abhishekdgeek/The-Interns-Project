<html><body>
<%@ page import="library.DBInfo1"%>

<%@ page import="java.sql.*"%>
<%@ page import="library.Random_id"%>
<%@ page import="java.io.*"%>
<%


String cin=request.getParameter("cin_name");
String pic=request.getParameter("pic");
String movie_name=request.getParameter("movie");
String medium=request.getParameter("medium");
String start_date=request.getParameter("start_date");
String end_date=request.getParameter("end_date");
String city=request.getParameter("city");
String value=request.getParameter("warning");
int state=Integer.parseInt(request.getParameter("state"));
String isLiv=(request.getParameter("isLive"));
int id=Integer.parseInt(request.getParameter("id"));
int time=Integer.parseInt(request.getParameter("time"));
int row1=Integer.parseInt(request.getParameter("row1"));
int row2=Integer.parseInt(request.getParameter("row2"));
int row3=Integer.parseInt(request.getParameter("row3"));
int row=Integer.parseInt(request.getParameter("row"));
int col=Integer.parseInt(request.getParameter("col"));
int row1p=Integer.parseInt(request.getParameter("row1p"));
int row2p=Integer.parseInt(request.getParameter("row2p"));
int row3p=Integer.parseInt(request.getParameter("row3p"));

String url="insert into `cinema_master`(`cinema_id`,`cinema_name`,`medium`,`isLive`) values ( ?,?,?,?)";
Connection con=DBInfo1.getConnection();
PreparedStatement ps1=con.prepareStatement(url);
ps1.setInt(1,id);
ps1.setString(2,cin);
ps1.setString(3,medium);
ps1.setString(4,isLiv);
ps1.executeUpdate();
int flagg=0;
String url1="select city from city_master where state_id='"+state+"'";
ps1=con.prepareStatement(url1);
ResultSet res=ps1.executeQuery();
while(res.next())
{

	if((res.getString(1)).equalsIgnoreCase(city))
	{
		flagg++;
	 
	}
}
if(flagg==0)
{
url1="insert into `city_master`(`state_id`,`city`) values ( ?,?)";
ps1=con.prepareStatement(url1);
ps1.setInt(1,state);
ps1.setString(2,city);
ps1.executeUpdate();
}

int theatre_id=new Random_id().getId(6);

int city_i=0;
url1="select city_id from city_master where city='"+city+"'";
ps1=con.prepareStatement(url1);
res=ps1.executeQuery();
while(res.next())
{
	city_i=res.getInt(1);
}
url1="insert into `theatre_of_city` values ( ?,?,?,?,?)";
ps1=con.prepareStatement(url1);
ps1.setInt(1,theatre_id);
ps1.setInt(2,city_i);
ps1.setInt(4,row);
ps1.setInt(5,col);
ps1.setInt(3,id);
ps1.executeUpdate();



flagg=0;
url1="select movie_name from movie_master";
ps1=con.prepareStatement(url1);
res=ps1.executeQuery();
while(res.next())
{

	if((res.getString(1)).equalsIgnoreCase(movie_name))
	{
		flagg++;
	 
	}
}
if(flagg==0)
{
url1="insert into `movie_master`(`movie_name`,`start_date`,`end_date`,`rating`) values ( ?,?,?,?)";
ps1=con.prepareStatement(url1);
ps1.setString(1,movie_name);
ps1.setString(2,start_date);
ps1.setString(3,end_date);
int rating=5;
ps1.setInt(4,rating);
ps1.executeUpdate();
}










int movie_id=0;
url1="select movie_id from movie_master where movie_name='"+movie_name+"'";
ps1=con.prepareStatement(url1);
res=ps1.executeQuery();
while(res.next())
{
	movie_id=res.getInt(1);
}


int theatre_show_time_id=new Random_id().getId(7);
url1="insert into `theatre_show_time`(`theatre_show_time_id`,`theatre_id`,`show_time_id`,`cinema_id`,`movie_id`) values ( ?,?,?,?,?)";
ps1=con.prepareStatement(url1);
ps1.setInt(1,theatre_show_time_id);
ps1.setInt(2,theatre_id);
ps1.setInt(3,time);
ps1.setInt(4,id);
ps1.setInt(5,movie_id);
ps1.executeUpdate();

url1="insert into `ticket_rate`(`theatre_id`,`type`,`price`,`rows`) values (?,?,?,?)";
ps1=con.prepareStatement(url1);
ps1.setInt(1,theatre_id);
ps1.setString(2,"Platinum");
ps1.setInt(3,row1p);
ps1.setInt(4,row1);

ps1.executeUpdate();
ps1.setInt(1,theatre_id);
ps1.setString(2,"Gold");
ps1.setInt(3,row2p);
ps1.setInt(4,row2);

ps1.executeUpdate();
ps1.setInt(1,theatre_id);
ps1.setString(2,"Silver");
ps1.setInt(3,row3p);
ps1.setInt(4,row3);

ps1.executeUpdate();
response.sendRedirect("insert_data.jsp?id="+value+"");

%>

</body></html>