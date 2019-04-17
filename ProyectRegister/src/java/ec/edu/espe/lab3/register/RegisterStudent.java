/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ec.edu.espe.lab3.register;
import ec.edu.espe.lab3.registerStudent.Register;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Consumes;
import javax.ws.rs.Produces;
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
@Path("student")
public class RegisterStudent {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of RegisterResource
     */
    public RegisterStudent() {
    }

    /**
     * Retrieves representation of an instance of Register.RegisterResource
     * @return an instance of java.lang.String
     */
    
    
    
  
    @Path("{idcourse}/{name}/{deposit}")   
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public Register  getRegister(@PathParam("idcourse") String idcourse,@PathParam("name") String name,@PathParam("deposit") float deposit) {
           String instructor="";
           String course="2958";
           String schedule="";
           float cost=0;
           float balance=0;
       if(idcourse.equals(course)){
           instructor="Edison Lascano";
           schedule="Lunes y Miercoles 12pm a 14am";
           cost=(float) 85.5;
           balance =deposit;
           
       } 
    Register register=new  Register( name, instructor,  course,  schedule,  cost,  balance);
    register.RegisterDataBase(name, instructor, course+"Programacion Avanzada", schedule, cost, balance);
        return register;
    }

    /**
     * PUT method for updating or creating an instance of RegisterResource
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public void putJson(String content) {
    }
}
