<html>
<head>
<title>Calculator</title>
</head>
<body>
<%@page language="java" %>
<%
    int n1= Integer.parseInt(request.getParameter("num1"));
    int n2= Integer.parseInt(request.getParameter("num2"));
    String op = request.getParameter("r1");

    if(op.equals("add"))
        out.println("<h1>Addition is </h1>"+(n1+n2));
    else if (op.equals("sub"))
        out.println("<h1>Subtraction is </h1>"+(n1-n2));
    else if (op.equals("mul"))
        out.println("<h1>Multiplication is </h1> "+(n1*n2));
    else if (op.equals("div"))
        out.println("<h1>Division</h1>"+(n1/n2));
    else 
        out.println("Please select the operator");
%>
</body>
</html>
