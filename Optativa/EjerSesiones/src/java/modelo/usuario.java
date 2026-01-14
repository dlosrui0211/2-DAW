package modelo;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author alejadnro
 */
public class usuario {

    String nameuser;
    String passwd;
    Integer nota;

   

    public usuario(String nameuser, String passwd) {
        this.nameuser = nameuser;
        this.passwd = passwd;
        this.nota = null;
    }
    

    public Integer getNota() {
        return nota;
    }

    public String getNameuser() {
        return nameuser;
    }

    public String getPasswd() {
        return passwd;
    }

    public void setNota(Integer nota) {
        this.nota = nota;
    }

}
