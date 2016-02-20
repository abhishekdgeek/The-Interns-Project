<html>
<script>
function validate()
{
	x=document.Myform.row.value;
	y=document.Myform.col.value;
	var row1=Number(document.Myform.row1.value);
	var row2=Number(document.Myform.row2.value);
	var row3=Number(document.Myform.row3.value);
	var row1p=Number(document.Myform.row1p.value);
	var row2p=Number(document.Myform.row2p.value);
	var row3p=Number(document.Myform.row3p.value);
	var file=document.Myform.path.value;
	if(file==null || file==0)
	{
	alert("Please select a file");
	return false;
	}

	var sum=row1+row2+row3;
	time=document.Myform.time.value;
	state=document.Myform.state.value;
	medium=document.Myform.medium.value;
	isLive=document.Myform.isLive.value;
	if(time==0)
	{
	alert("Please Select Time!");
	return false;
	}
	if(x>40 ||y>40)
	{
	alert("Enter a Valid Row and Column Count!");
	return false;
	}
	if(sum!=x)
	{
	alert("Enter a Valid Row Combination!");
	return false;
	}
	
	if(state==0)
	{
	alert("Please Select state!");
	return false;
	}
	if(medium==0)
	{
	alert("Please Select medium!");
	return false;
	}
	if(isLive==0)
	{
	alert("Please Select isLive!");
	return false;
	}
}

</script>


	<body bgcolor=#eeeee>
<%@ include file="index1.jsp"%>
	<%-- jsp code start--%>
	
									<%@ page import="library.Random_id"%>
									<%@ page import="library.DBInfo1"%>
									<%@ page import="java.sql.*"%>
									<%! Random_id r=new Random_id();%>
									<%
									String warning=request.getParameter("id");
									
										int k=r.getId(8);
									%>
									
	<%-- jsp code ends --%>
	

	<center>
	<font color=red>Welcome : <%=warning.toUpperCase()%></font>
	<hr>
		<form action="insert.jsp" name="Myform" method=post onsubmit="return validate()">
			<table><caption><h4>Enter Details</h4></caption>
					<tr>
						<td>
						Cinema-Id : &nbsp; </td><td><input type=text name=id readonly=true value='<%=k%>'>
						</td>
						
						<td>
						Enter the cinema-Name</td><td><input type=text name=cin_name required>
						</td>
					</tr>
									<%
										String url="select * from state_master";
										Connection con=DBInfo1.getConnection();
										PreparedStatement ps=con.prepareStatement(url);
										ResultSet res=ps.executeQuery();
									%>
					<tr>
						<td>
						Select State:
						</td>
						
						<td>
										<select name=state >
												<option value=0>Select</option>
									<%						while(res.next())
															{
															int p=res.getInt(1);
															String s=res.getString(2);
									%>
					
						<option value='<%=p%>'><%=s%></option>
									<%
									}
									%>
											</select>
						</td>
					
					
						<td>
						Enter the City</td><td><input type=text name=city required>
						</td>
					</tr>	
					
					<tr>	 
									<%
											int t=0;
											url="select * from show_time";
											ps=con.prepareStatement(url);
											res=ps.executeQuery();
									%>
						<td>
							Select Time:
						</td>
						<td>
							<select name=time>
									<option value=0>Select</option>
									<%						while(res.next())
															{
															t=res.getInt(1);
															String s=res.getString(2);
									%>
									<option value='<%=t%>'><%=s%></option>
									<%
															}
									%>
							</select>
						</td>
						
						</tr>
						</table>
						<hr>
						<table><caption><h4>Cinema Details</h4></caption>
						
						<tr>
							<td>
								Enter the Row</td><td><input type=number name=row required >
							</td>
													
							<td>
								Enter the Column</td><td><input type=number name=col required>
							</td>	
						</tr>
						<tr>	
							<td>
								Enter the 1St class rows</td><td><input type=number name=row1 required>
							</td>		
						
							<td>
								Enter the Price for 1St class</td><td><input type=number name=row1p required min=40>
							</td>	
						</tr>
						<tr>	
							<td>
								Enter the 2nd class rows</td><td><input type=number name=row2 required>
							</td>
											
							<td>
								Enter the Price for 2nd class</td><td><input type=number name=row2p required min=40>
							</td>	
						</tr>
						<tr>
							<td>
								Enter the 3rd class rows</td><td><input type=number name=row3 required>
							</td>
						
							<td>
								Enter the Price for 3rd class</td><td><input type=number name=row3p required min=40>
							</td>	
						</tr>										
						<tr>
							<td>
								Select Condition:
							</td>
							<td>
									<select name=isLive>
											<option value=0>Select</option>
											<option value=active>Active</option>
											<option value=dead>Dead</option>
									</select>
							</td>
					
							<td>
								Select Medium:
							</td>
							<td>
									<select name=medium>
										<option value=0>Select</option>
										<option value=English>English</option>
										<option value=Hindi>Hindi</option>
									</select>
							</td>
						</tr>
					</table>
					<hr>
					<table><caption><h4>Movie Details</h4></caption>
					
					<tr><td>Enter the Movie name:</td><td><input type=text name=movie required></td></tr>
					<tr><td>Enter the start Date</td><td><input type=date name=start_date required></td></tr>
					<tr><td>Enter the End Date</td><td><input type=date name=end_date required></td></tr>
					<tr><td colspan=2><input type=file name=path></td><td><input type=hidden name=warning value=<%=warning%>><input type=submit required value=Insert></td></tr>
			</table>
<a href="admin1.jsp?id=<%=warning%>">Back</a>
		</form>
		</center>
	</body>
</html>