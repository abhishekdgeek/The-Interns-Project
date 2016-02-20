<html>
<head>

<title>Send an e-mail</title>
</head>
<body>
<center>
<%@ include file="index1.jsp"%>
    <form action="mailing_test.jsp" method="post">
        <table border="0" width="35%" align="center">
            <caption><h2>Send New E-mail</h2></caption>
            <tr>
                <td width="60%">Recipient address </td>
                <td><input type="text" name="recipient" required size="50"/></td>
            </tr>
            <tr>
                <td>Subject </td>
                <td><input type="text" name="subject" size="50" required /></td>
            </tr>
            <tr>
                <td>Content </td>
                <td><textarea rows="10" cols="39" name="content" required></textarea> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Send" required /></td>
            </tr>
        </table>
         
    </form>
	<a href="admin1.jsp?id=<%=request.getParameter("id")%>">Back</a>
	</center>
</body>
</html>