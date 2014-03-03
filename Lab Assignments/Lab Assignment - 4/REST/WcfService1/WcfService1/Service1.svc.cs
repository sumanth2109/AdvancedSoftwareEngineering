using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace WcfService1
{
    // NOTE: You can use the "Rename" command on the "Refactor" menu to change the class name "Service1" in code, svc and config file together.
    public class Service1 : IService1
    {
    
        [WebInvoke(Method = "GET", ResponseFormat = WebMessageFormat.Json, UriTemplate = "data/{id}")]

        public string AsciiValue(string id)
        {

            string finalValue =string.Empty;
            byte[] ascii = Encoding.ASCII.GetBytes(id);
            foreach (Byte b in ascii)
            {
                finalValue += b.ToString("X");
            }

            return finalValue;
        }

        public string GetData(int value)
        {
            return string.Format("You entered: {0}", value);
        }

        public CompositeType GetDataUsingDataContract(CompositeType composite)
        {
            if (composite == null)
            {
                throw new ArgumentNullException("composite");
            }
            if (composite.BoolValue)
            {
                composite.StringValue += "Suffix";
            }
            return composite;
        }

       
        public string GetDateTime()
        {
            return DateTime.Now.ToString();
        }

        public string Id { get; set; }
    }


    public class Person
    {

        public int Id { get; set; }

        public string Name { get; set; }

    }
}
