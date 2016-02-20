<%@ page import="library.DBInfo1"%><%@ page import="java.sql.*"%><%@ page import="java.io.*"%><%@ page import="library.Random_id"%>
<%


%><%

String user=request.getParameter("uname");
String pass1=request.getParameter("pass1");
String pass2=request.getParameter("pass2");
String mail=request.getParameter("email");
int phone=Integer.parseInt(request.getParameter("phone"));

int user_id=new Random_id().getId(5);
String url="insert into `user_table`(`user_id`,`username`,`password`,`email`,`phone`) values ( ?,?,?,?,?)";
Connection con=DBInfo1.getConnection();
PreparedStatement ps1=con.prepareStatement(url);
ps1.setInt(1,user_id);
ps1.setInt(5,phone);
ps1.setString(2,user);
ps1.setString(3,pass1);
ps1.setString(4,mail);
ps1.executeUpdate();


%>