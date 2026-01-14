<%-- 
    Document   : index.jsp
    Created on : 25-sep-2025, 14:25:10
    Author     : alejadnro
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="modelo.usuario"%>
<%@page import="modelo.Pregunta"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
       
      <% usuario u=(usuario)session.getAttribute("use");
         if(session.isNew() || u==null)
       {
       out.println(" <h1>Autentícate!</h1>");
       out.println(" <form name='miforumlario' "
               + "action='s1' method='post'>");
       out.println("usuario: <input type='text' name='usuario'><br>");
       out.println("password: <input type='password' name='pass'><br>");
       out.println("<button >Intro</button>"); 
       
       out.println("</form>");}
       else{
       
       if(u.getNota()!=null){
       out.println(u.getNameuser()+"<br>");
       out.println("Tu nota en el examen ha sido: "+u.getNota());
       out.println(" <form name='miforumlario2' "+ "action='Cerrar' method='post'>");
       out.println("<button type='submit'>Cerrar sesión</button>");
       out.println("</form>");
      }
      else{ 
      out.println(" <form name='miforumlario2' action='comprobar' method='post'>");
      Pregunta preg = new Pregunta();
      out.println(preg.getPregunta() + "<br>");
      out.println("<input type='radio' name='rd1' value='1'>" + preg.getOption1() + "<br>");
      out.println("<input type='radio' name='rd1' value='2'>" + preg.getOption2() + "<br>");
      out.println("<input type='radio' name='rd1' value='3'>" + preg.getOption3() + "<br>");
      
      
      
      out.println("<button type='submit'>Enviar respuesta</button>");
       out.println("</form>");
      }
       }
       
        %>
    </body>
</html>
