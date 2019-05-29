<%-- 
    Document   : density
    Created on : 22/05/2019, 13:57:10
    Author     : Jessy
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Density</title>
    </head>
    <body>
        <%="<h1> The Density is "+(Integer.parseInt(request.getParameter("Dough"))/Integer.parseInt(request.getParameter("Volume")))+"</h1>"%>
    
    </body>
</html>
