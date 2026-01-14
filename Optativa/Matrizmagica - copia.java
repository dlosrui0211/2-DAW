package matriz;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author diurno
 */
public class Matrizmagica {

    public static int[][] crearMatriz(int size){
        int ma[][] = new int [size][size];
        int x = size/2;
        int y = 0;
        
        int limit = size*size;
        
        for (int j=1;j<=limit; j++){
            
            if (x < 0){
                x = size-1;
            } else if (x > size-1){
                x = 0;
            }
            
            if (y < 0){
                y = size-1;
            }else if (y > size-1){
                y=0;
            }
            
            ma[y][x] = j;
            
            if (j % size == 0){
                y = y + 1;
            } else{
                x-=1;
                y-=1;
            }
        }
        return ma;
    }  
}
