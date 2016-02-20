<html>
<body bgcolor=#eeeee>
<center>
<%@ page import="java.sql.*" %>
		<%@ page import="library.DBInfo1" %>
<%
			String u=request.getParameter("username");
			String p=request.getParameter("password");
			String e=request.getParameter("email");
			String phn=(request.getParameter("phone"));
			
			Connection con=DBInfo1.getConnection();
	
			PreparedStatement pes=con.prepareStatement("update `user_table` set `user_id`='1',`username`='"+u+"',`password`='"+p+"',`email`='"+e+"',`phone`='"+phn+"' where `user_id`='1'");
			pes.executeUpdate();
			DBInfo1.close();
%>			
		<div id=header><header><font color=red> Updated succesfully!</font></header></div>
		
	<%@ include file="profile.jsp" %>


</center>
</body>
<style>
#header{
padding : 20px;
}
</style>
</html>