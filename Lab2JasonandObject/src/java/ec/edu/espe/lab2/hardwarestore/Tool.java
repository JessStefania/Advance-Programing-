/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ec.edu.espe.lab2.hardwarestore;

/**
 *
 * @author Jessy
 */
public class Tool {
    private int id;
    private String description;
    private int stock;
    private boolean discount;

    /**
     * @return the id
     */
    public int getId() {
        return id;
    }

    /**
     * @param id the id to set
     */
    public void setId(int id) {
        this.id = id;
    }

    /**
     * @return the description
     */
    public String getDescription() {
        return description;
    }

    /**
     * @param description the description to set
     */
    public void setDescription(String description) {
        this.description = description;
    }

    /**
     * @return the stock
     */
    public int getStock() {
        return stock;
    }

    /**
     * @param stock the stock to set
     */
    public void setStock(int stock) {
        this.stock = stock;
    }

    /**
     * @return the discount
     */
    public boolean isDiscount() {
        return discount;
    }

    /**
     * @param discount the discount to set
     */
    public void setDiscount(boolean discount) {
        this.discount = discount;
    }

    public Tool(int id, String description, int stock, boolean discount) {
        this.id = id;
        this.description = description;
        this.stock = stock;
        this.discount = discount;
    }
    
    
    
}
