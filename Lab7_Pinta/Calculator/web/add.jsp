<%-- 
    Document   : add
    Created on : 22/05/2019, 12:28:23
    Author     : Jessy
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Addition</title>
    </head>
    <body>
        <h1>Addition</h1>
        <%="<h1>The sum is"+(Integer.parseInt(request.getParameter("t1"))+Integer.parseInt(request.getParameter("t2")))+"</h1>"%>
    </body>
</html>
