/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

import com.mycompany.volumebola.VolumeBola;
import java.util.Scanner;
/**
 *
 * @author ACER
 */
public class VolumeBolaTester {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Ayo menghitung volume bola");
        System.out.print("Masukkan ruas: ");
        double ruas = input.nextDouble();

        VolumeBola bola = new VolumeBola();
        bola.setRuas(ruas);
        
        System.out.println();
        System.out.println("Ruas: " +bola.getRuas());
        System.out.println("Hasil: "+ bola.HitungVolume());
    }
}
