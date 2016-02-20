<html>

	<body bgcolor=#eeeee>
	<%@ include file="index1.jsp"%>
		<% String s1=request.getParameter("id");
			
		%>
		<center>
		<h1>Welcome <font color=green><%=s1.toUpperCase()%></font></h1>
		
		<hr>
		<form action="test_for_submit.jsp" method=post>
		<table>
		<tr><td><a href="insert_data.jsp?id=<%=s1%>">Insert data</a></td></tr>
		<tr><td><a href="delete_data.jsp?id=<%=s1%>">Delete record</a></td></tr>
		<tr><td><a href="update_data1.jsp?id=<%=s1%>">Update record</a></td></tr>

		<tr><td><a href="mailing.jsp?id=<%=s1%>">Mail to Clients</a></td></tr>
		
		</table>
		<hr>
		<input type="submit" name=logout value="LogOut" onclick="myFun()"> 		<%-- ends session --%>
		<input type="submit" name=logout value="Profile">		<%-- opens the profile page --%>
		<input type="submit" name=logout value="Staff">
		
		
		</form>
		</center>
		
	</body>
</html>