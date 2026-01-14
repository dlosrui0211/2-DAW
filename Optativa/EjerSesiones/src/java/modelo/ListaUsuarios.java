/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelo;
import java.util.ArrayList;
/**
 *
 * @author alejandro
 */
public class ListaUsuarios extends ArrayList<usuario>{

    //constructor
    public ListaUsuarios() {
        this.add(new usuario("jaime","1234"));
        this.add(new usuario("javier","1234"));
        this.add(new usuario("maria","1234"));
        this.add(new usuario("pepe","pepa"));
    }
        
    
}
