<%-- 
    Document   : vermatriz
    Created on : 6 oct 2025, 10:13:20
    Author     : diurno
--%>
<%@page import="matriz.Matrizmagica"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <% int size = Integer.parseInt(request.getParameter("size"));%>
        
        <form action='vermatriz.jsp'>
            <button type="submit" name="size" value='<%= (size == 1) ? size : (size - 2) %>'>encoger</button>
        </form>
        <form action='vermatriz.jsp'>
            <button type="submit" name="size" value='<%=size + 2%>'>Aumentar</button>
        </form>
        <%
          out.print("<table border=2>");
            int matriz[][] = Matrizmagica.crearMatriz(size);
                for (int i=0; i<matriz.length; i++){
                    out.println("<tr>");
                    for (int j=0; j<matriz.length;j++){
                        out.println("<td>");
                            out.print(matriz[i][j]);
                        out.println("</td>");
                    }
                    out.println("</tr>");
                }
          out.print("</table>");  
        %>
    </body>
</html>
