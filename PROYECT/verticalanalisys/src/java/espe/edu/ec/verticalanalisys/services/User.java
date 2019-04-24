/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package espe.edu.ec.verticalanalisys.services;

import espe.edu.ec.verticalanalisys.connecction.DBConnect;
import java.sql.SQLException;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.UriInfo;
import javax.ws.rs.Produces;
import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PUT;
import javax.ws.rs.PathParam;
import javax.ws.rs.core.MediaType;

/**
 * REST Web Service
 *
 * @author jorge
 */
@Path("user")
public class User {

    @Context
    private UriInfo context;

    /**
     * Creates a new instance of User
     */
    public User() {
    }

    /**
     * Retrieves representation of an instance of espe.edu.ec.verticalanalisys.services.User
     * @return an instance of espe.edu.ec.verticalanalisys.hardware.User
     */
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public espe.edu.ec.verticalanalisys.hardware.User getJson() {
        //TODO return proper representation object
        throw new UnsupportedOperationException();
    }

    /**
     * PUT method for updating or creating an instance of User
     * @param content representation for the resource
     */
    @PUT
    @Consumes(MediaType.APPLICATION_JSON)
    public void putJson(espe.edu.ec.verticalanalisys.hardware.User content) {
    }
    
    /**
     *
     * @param user
     * @return
     * @throws SQLException
     */
}
