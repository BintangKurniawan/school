/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

import com.mycompany.persegipanjang.PersegiPanjang;
import java.util.Scanner;

/**
 *
 * @author ACER
 */
public class PersegiPanjangTester {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan panjang: ");
        double panjang = input.nextDouble();
        System.out.print("Masukkan lebar: ");
        double lebar = input.nextDouble();
        
        PersegiPanjang meja = new PersegiPanjang();
        meja.setPanjang(panjang);
        meja.setLebar(lebar);
        
        System.out.println();
        System.out.println("Panjang: " +meja.getPanjang());
        System.out.println("Lebar: " + meja.getLebar());
        System.out.println("Hasil: " + meja.HitungLuas());
    }
}
