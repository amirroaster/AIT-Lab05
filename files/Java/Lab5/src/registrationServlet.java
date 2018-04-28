

import java.io.IOException;
import java.io.PrintWriter;
import java.util.Enumeration;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/registrationServlet")
public class registrationServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    
    public registrationServlet() {
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		
		
		String queryString = request.getQueryString();
		String[] params = queryString.split("&");
		
		out.println("<article>");
		out.println("<header>Registration by Java</header><section>");
		for(String param : params)
		{
			String name = param.split("=")[0];
			int paramLength = param.length();
			int nameLength = name.length();
			if(paramLength > nameLength + 1)
			{
				String value = param.split("=")[1];
				out.println(name + ": " + value + "</br>");
			}
			else
			{
				out.println(name + ": null" + "</br>");
			}
			
		}
		out.println("</section></article>");
		
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
	}

}
