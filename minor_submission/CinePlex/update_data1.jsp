<html>
<body bgcolor=#eeeee>
<%@ include file="index1.jsp"%>
<center>
<form action="update_data.jsp" method=post>
<table>
<tr>
<td>
Select Cinema for update :
<select name=id>
		<%@ page import="java.sql.*" %>
		<%@ page import="library.DBInfo1" %>
		
		<%
			String query="";
			Connection con=DBInfo1.getConnection();
			
			query="select * from cinema_master";
			PreparedStatement ps=con.prepareStatement(query);
			ResultSet res=ps.executeQuery();
			                    
			while(res.next())
			{
			int k=res.getInt(1);
			String  pp=res.getString(2);
				%>
				
		<option value='<%=k%>'><%=pp%></option>	
				<%
			}
			
		%>
		</select>
		</td>
		
		</tr>
	</table>
<input type=submit value=Update >
</form>
</center>
</body>
</html>