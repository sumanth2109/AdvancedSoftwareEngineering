using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;

/// <summary>
/// Summary description for WebService
/// </summary>
[WebService(Namespace = "http://tempuri.org/")]
[WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
// To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
// [System.Web.Script.Services.ScriptService]
public class WebService : System.Web.Services.WebService {

    public WebService () {

        //Uncomment the following line if using designed components 
        //InitializeComponent(); 
    }

    [WebMethod]
    public char AsciiValue(char Character) {
        return Character;
    }
    
    [WebMethod]
    public string Course(string Name, int StudentId, string Course, String Faculty) {
        return "Hey I am " + Name + " (" + StudentId + ")." + " In this semester, I have taken " + Course + " under Dr. " + Faculty + ".";
    }

    [WebMethod]
    public int ReverseNumber(int Number)
    {
        int result = 0;
        while (Number > 0)
        {
            result = result * 10 + Number % 10;
            Number /= 10;
        }
        return result;
    }

}
