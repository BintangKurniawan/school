/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

import com.mycompany.lingkaran.Lingkaran;
import java.util.Scanner;
/**
 *
 * @author ACER
 */
public class LingkaranJavaTester {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Ayo menghitung luas lingkaran");
        System.out.print("Masukkan ruas: ");
        double ruas = input.nextDouble();
        
        Lingkaran piring = new Lingkaran();
        piring.setRuas(ruas);
        
        System.out.println();
        System.out.println("Ruas: " +piring.getRuas());
        System.out.println("Hasil: " + piring.HitungLuas());
    }
}
