/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.pertemuan2;
import com.mycompany.pertemuan2.Segitiga;
import java.util.Scanner;
/**
 *
 * @author ACER
 */
public class SegitigaTester {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.println("Masukkan alas: ");
        double alas = input.nextDouble();
        System.out.println("Masukkan tinggi: ");
        double tinggi = input.nextDouble();
        
        Segitiga sgtiga = new Segitiga();
        sgtiga.setAlas(alas);
        sgtiga.setTinggi(tinggi);
        
        System.out.println();
        System.out.println("Alas: " + sgtiga.getAlas());
        System.out.println("TInggi: " + sgtiga.getTinggi());
        System.out.println("Hasil: " + sgtiga.HitungLuas());
    }
}
