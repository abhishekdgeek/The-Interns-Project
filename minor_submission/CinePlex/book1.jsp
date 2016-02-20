
<%@ page import="library.DBInfo1"%>
<%@ page import="java.util.*"%>
<%@ page import="java.sql.*"%>
<%@ page import="library.Random_id"%>
<%@ page import="java.io.*"%>
<html><body>
<%@ include file="index1.jsp"%>
<center>
<div id="table1">
<form action="select_movie.jsp" method=post>

Select Theatre:<select name=cinema_id>
<%
int id=Integer.parseInt(request.getParameter("city"));
int user_id=Integer.parseInt(request.getParameter("user_id"));
int cinema_id=0;
String cinema_name="",medium="";
session.setAttribute("city",id);
session.setAttribute("user_id",user_id);
PreparedStatement ps=null;
ResultSet res=null;
ResultSet rs=null;

			Connection con=DBInfo1.getConnection();
			String query1="select cinema_id from theatre_of_city where city_id="+id+"";
			ps=con.prepareStatement(query1);
			res=ps.executeQuery();
		
			while(res.next())
			{
			int k=res.getInt(1);
			query1="select * from cinema_master where cinema_id="+k+" and isLive like \"active\"";
			ps=con.prepareStatement(query1);
			rs=ps.executeQuery();
			while(rs.next())
			{
	
	cinema_id=rs.getInt(1);
	cinema_name=rs.getString(2);
	medium=rs.getString(3);
%>
<option value='<%=cinema_id%>'><%=cinema_name%>:&nbsp;(<%=medium%>)</option>
<%}}%>
			
			
</select>
<input type=hidden name=city value=<%=id%>>
<input type=hidden name=user_id value=<%=user_id%>>

<input type=submit value=Next>
<hr><br>
<a align=center href="book.jsp">Back</a>
</form>
</div>
</center></body>

<style>
#table1
{
	padding:20px;
}

</style>
</html>