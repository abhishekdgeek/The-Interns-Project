
<html>
<body bgcolor=#eeeee>
<%@ include file="index1.jsp"%>
<center>
<form action="book1.jsp" method=post>
<div id="table1">
<table border=1>
<tr><td>Select City</td><td>
		<%@ page import="java.sql.*" %>
		<%@ page import="library.DBInfo1" %>
		<select name=city>
		<%		
			
			int kk=(Integer)session.getAttribute("id");
			String city="";
			int city_id=0;
			Connection con=DBInfo1.getConnection();
			String query="select * from city_master ";
			PreparedStatement ps=con.prepareStatement(query);
			ResultSet res=ps.executeQuery();
			while(res.next())
			{
				city_id=res.getInt(1);
				city=res.getString(3);
			%>
			<option value=<%=city_id%>><%=city%></option>
			<%
			}
			%>
			</select>
			</td></tr><tr><td colspan=2 align=center>
			<input type=submit value=Select></td></tr>
</table>
</div>
<input type=hidden name=user_id value=<%=kk%>>
</form>
</center>
</body>
<style>
#table1
{
	padding:20px;
}

</style>
</html>			