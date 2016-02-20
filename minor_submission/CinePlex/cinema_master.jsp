
		<%@ page import="java.sql.*" %>
		<%@ page import="library.DBInfo1" %>
		
		<%
			int id1=Integer.parseInt(request.getParameter("id"));
			String s1=request.getParameter("cin_name");
			int m=Integer.parseInt(request.getParameter("medium"));
			int C=Integer.parseInt(request.getParameter("isLive"));
			if(m==0 && C==0)
			{
			response.sendRedirect("insert_data.jsp");
			}
			else
			{
			
			String medium="";
			boolean condition;
			
			if(m==1)
				medium="Hindi";
			else if(m==2)
				medium="English";
			else
				medium="Others";
			
			if(C==1)
				condition=true;
			else
				condition=false;
			
			Connection con=DBInfo1.getConnection();
			String query="insert into cinema_master values(?,?,?,?)";
			PreparedStatement ps=con.prepareStatement(query);
			ps.setInt(1,id1);
			ps.setString(2,s1);
			ps.setString(3,medium);
			ps.setBoolean(4,condition);
			int status=ps.executeUpdate();
			if(status==1)
			{
				response.sendRedirect("success.jsp");
			}
			else
			{
					response.sendRedirect("failed.jsp");
			}
			}
		%>
	
/insert_data.jsp?id=dsad&cin_name=adasd&medium=1&isLive=1