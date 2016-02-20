<%@ include file="mailing.jsp"%>
<%--
<%@ page import="javax.mail.*"%>
<%
String to="jangirkamal21@gmail.com"
String from=request.getParameter("recipient");
String subject=request.getParameter("subject");
String content=request.getParameter("content");
Properties properties=System.getProperties();
properties.setProperty("mail.smtp.host",host);
Session session=Session.getDefaultInstance(properties);

MimeMessage(session);
message.setFrom(new InternetAddress(from));
message.addRecipient(Message.RecipientType.TO,new InternetAddress(to));
message.setSubject(subject);//not get yet
message.setText(content);
Transport.send(message);



%>
--%>