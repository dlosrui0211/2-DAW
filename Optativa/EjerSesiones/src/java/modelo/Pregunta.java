/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelo;

/**
 *
 * @author alejandro
 */
public class Pregunta {

    String pregunta;
    String option1;
    String option2;
    String option3;
    String respueta;

    public Pregunta() {
            
    this.pregunta="Primer presidete la II República Española";
    this.option1  = "Manuel Azaña";     
    this.option2  = "Diego Martinez Barrio";     
    this.option3  = "Niceto Alcalá-Zamora";     
    this.respueta  = "3";

    }

    public String getPregunta() {
        return pregunta;
    }

    public String getOption1() {
        return option1;
    }

    public String getOption2() {
        return option2;
    }

    public String getOption3() {
        return option3;
    }

    public String getRespueta() {
        return respueta;
    }

    

}
