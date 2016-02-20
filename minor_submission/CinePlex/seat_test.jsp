<html>

<body >

<%@ include file="index1.jsp"%>
<center>
<form action="update_seat.jsp" method=post name="jj" onsubmit="return call()">
<table>
<%@ page import="library.DBInfo1"%>

<%@ page import="java.sql.*"%>
<%@ page import="library.Random_id"%>
<%@ page import="java.io.*"%>
<tr>
<%


		int movie_id=Integer.parseInt(request.getParameter("movie_id"));
		int city=Integer.parseInt(request.getParameter("city"));
		int cinema_id=Integer.parseInt(request.getParameter("cinema_id"));
		int user_id=Integer.parseInt(request.getParameter("user_id"));
		int show_time_id=Integer.parseInt(request.getParameter("show_time_id"));
		String date_selected=request.getParameter("date_selected");
	int platinum=0;
	int row_p=0,row_g=0,row_s=0;
	int gold=0;
	int silver=0;
	int theatre_id=0;
	int rate_id_p=0,rate_id_g=0,rate_id_s=0;
		int test=0;
		int row=0;
	int col=0;
	Connection con1=DBInfo1.getConnection();
		String query1="select * from theatre_show_time where show_time_id="+show_time_id+" and movie_id="+movie_id+" ";
		PreparedStatement ps1=con1.prepareStatement(query1);
		ResultSet res1=ps1.executeQuery();
		ResultSet res=null;
		while(res1.next())
		{
			
			theatre_id=res1.getInt(2);
			query1="select * from ticket_rate where theatre_id="+theatre_id+" ";
			ps1=con1.prepareStatement(query1);
			res=ps1.executeQuery();
			while(res.next())
			{
				if(test==0){
					platinum=res.getInt(4);
					row_p=res.getInt(5);
					rate_id_p=res.getInt(1);
					}
					else if(test==1){
						gold=res.getInt(4);
						row_g=res.getInt(5);
						rate_id_g=res.getInt(1);
						}
					else if(test==2){
					
						silver=res.getInt(4);
						row_s=res.getInt(5);
						rate_id_s=res.getInt(1);
						}
					test++;
			}
			}
			query1="select * from theatre_of_city where theatre_id="+theatre_id+" ";
			ps1=con1.prepareStatement(query1);
			res=ps1.executeQuery();
			while(res.next())
			{
				row=res.getInt(4);
				col=res.getInt(5);
				break;
			}
	



	
query1="select seat_no from user_selected where selected_date='"+date_selected+"' and user_id="+user_id+" and theatre_id="+theatre_id+" and show_time_id="+show_time_id+" "; 
ps1=con1.prepareStatement(query1);
res=ps1.executeQuery();
while(res.next())
{
int k=res.getInt(1);
}


int flag=1;

	
	for(int i=0;i<row;i++)
	{
		for(int j=0;j<col;j++)
		{
		int p=0;
		
		
	
query1="select seat_no from user_selected where selected_date='"+date_selected+"' and user_id="+user_id+" and theatre_id="+theatre_id+" and show_time_id="+show_time_id+" "; 
ps1=con1.prepareStatement(query1);
res=ps1.executeQuery();
while(res.next())
{
int k=res.getInt(1);

			
			
				if(k==flag)
				{
				%>
					<td>S:<%=flag%></td><td><img src="./not.jpg" height=12 width=12></td>
					<%
					flag++;
					p=1;
					break;
				}
				k--;
			}
			if(p!=1)
			{
			%>
			<td>S:<%=flag%></td><td><input type=checkbox name=seat value='<%=flag%>'></td>
			<%
			flag++;
			}
		}
		
		if((flag-1)<=(col*row_p))
		{
		%>
		<td><font color=#a6ee22>Platinum</td>
		<%
		}
		else if((flag-1)>(col*row_p) && (flag-1)<=((col*row_g)+(col*row_p)))
		{
		%>
		<td><font color=#eeef>Gold</td>
		<%
		
		}
		else
		{
		%>
		<td><font color=#ff>Silver</td>
		<%
		
		}
		%>
		</tr>
		<%
		
		
		
		}
	%>
</table>

<img src="./screen.jpg">
<hr>
			<input type=hidden name=movie_id value=<%=movie_id%>>
			<input type=hidden name=row_p value=<%=row_p%>>
			<input type=hidden name=row value=<%=row%>>
			<input type=hidden name=col value=<%=col%>>
			<input type=hidden name=platinum value=<%=platinum%>>
			<input type=hidden name=gold value=<%=gold%>>
			<input type=hidden name=silver value=<%=silver%>>
			<input type=hidden name=row_g value=<%=row_g%>>
			<input type=hidden name=row_s value=<%=row_s%>>
			<input type=hidden name=user_id value=<%=user_id%>>
			<input type=hidden name=show_time_id value=<%=show_time_id%>>
			<input type=hidden name=date_selected value=<%=date_selected%>>
<input type=submit value=select>
<hr>
<br>
<a href="select_time.jsp?date_selected=<%=date_selected%>&movie_id=<%=movie_id%>&user_id=<%=user_id%>&city=<%=city%>&cinema_id=<%=cinema_id%>">Back</a>
</form>
</center>
<hr>
</body>
</html>