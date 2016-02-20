<html>
<body>
<%@ include file="index1.jsp"%>
		<%@ page import="library.DBInfo1"%>
		<%@ page import="java.sql.*"%>
		<%@ page import="java.io.*"%>

<form action="delete_movie.jsp" method=post>
<center>
	<table>
		<tr>
			<td>
				Select Movie for Delete
			</td>
			<td>
				<select name=select>
							<%
		String sk=request.getParameter("id");
								Connection con=DBInfo1.getConnection();
								String query="select * from movie_master ";
								PreparedStatement ps=con.prepareStatement(query);
								ResultSet res=ps.executeQuery();
								                                if(!res.isBeforeFirst())
                                {
                                    %>
                                        
                                        <center><%out.print("No Files!"); %></center>
                                        
                                    <%
                                }    

								while(res.next())
								{
								String s=res.getString(2);
								int k=res.getInt(1);
							%>
					<option value='<%=k%>'><%=s%></option>
							<%
								}

							%>
				</select><td>
			<input type=submit value=Delete>
			</td>
			</td>
		</tr>
		
		<tr>
			<td>
			<input type=hidden name=id value=movie>
			</td>
			
		</tr>
</table>
</form>


<form action="delete_movie.jsp">
<table >
			<tr>
				<td>
						Select Cinema for Delete
				</td>
				<td>
					<select name=select  >
				
								<%
										query="select * from cinema_master ";
										ps=con.prepareStatement(query);
										res=ps.executeQuery();
										                                if(!res.isBeforeFirst())
                                {
                                    %><center><%out.print("No Files!"); %></center>
                                    <%
                                }    

										while(res.next())
										{
										int id=res.getInt(1);
										String s=res.getString(2);
								%>
									<option value='<%=id%>'><%=s%></option>

								<%
										}

								%>
						</select><td>
						<input type=submit value=Delete>
					</td>
					</td>
				</tr>
				<tr>
					<td>
						<input type=hidden name=id value=cinema>
					</td>
					
				</tr>

</table>
</form>



<form action="delete_movie.jsp"  >
	<table >
			<tr>
				<td>
					Select city for Delete
				</td>
				<td>
					<select name=select >
							<%
								query="select * from city_master ";
								ps=con.prepareStatement(query);
								res=ps.executeQuery();
								                                if(!res.isBeforeFirst())
                                {
                                    %>
                                        
                                        <center><%out.print("No Files!"); %></center>
                                        
                                    <%
                                }    

								while(res.next())
								{
								String s=res.getString(3);
							%>
								<option value='<%=s%>'><%=s%></option>

							<%
								}

							%>
					</select><td>
						<input type=submit value=Delete>
					</td>
					</td>
				</tr>
				<tr>
					<td>
						<input type=hidden name=id value=city>
					</td>
					
				</tr>

</table>
<hr>
<a href="admin1.jsp?id=<%=sk%>">Back</a>
</center>


</form>




</body>
</html>
