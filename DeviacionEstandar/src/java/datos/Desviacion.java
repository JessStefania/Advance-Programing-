/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package datos;

import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Produces;
import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.PUT;
import javax.ws.rs.PathParam;
import javax.ws.rs.core.MediaType;

/**
 * REST Web Service
 *
 * @author Jessy
 */
@Path("desviacion")
public class Desviacion {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of Desviacion
     */
    public Desviacion() {
    }

    /**
     * Retrieves representation of an instance of datos.Desviacion
     * @return an instance of java.lang.String
     */
    @Path("{datoUno},{datoDos},{datoTres}")
    @GET
    @Produces(MediaType.APPLICATION_XML)
    public String getStandarddeviation(@PathParam("{datoUno},{datoDos},{datoTres}")String datoUno ,
    String datoDos ,String datoTres) {
     int n=3;
     double u=0;//la media represntada por u 
     double  abs=0;
     double div=0;
    double one=Double.parseDouble(datoUno);
    double two=Double.parseDouble(datoDos);
    double three=Double.parseDouble(datoTres);
     u = (one+two+three)/n;
     abs=(int) Math.pow((one-u),2)+(int) Math.pow((two-u),2)
            +(int) Math.pow((three-u),2);
     div= (int)Math.pow((abs/n),(0.5));
     
     
     return Double.toString(div);
    }

    /**
     * PUT method for updating or creating an instance of Desviacion
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_XML)
    public void putXml(String content) {
    }
}
