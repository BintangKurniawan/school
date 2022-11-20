package com.mycompany.kashier;
import java.util.Scanner;
/**
 *
 * @author ACER
 */
public class Kasir {

    public static void main(String[] args) {
        System.out.println("*********************");
        System.out.println("-----Menu Makanan----");
        System.out.println("*********************");
        System.out.println("Bintang Kurniawan");
        System.out.println("");
        Pelanggan myPelanggan = new Pelanggan();
        Makanan myMakanan = new Makanan();
        myMakanan.menuMakanan();
        myPelanggan.pesan();
        myPelanggan.struk();
    }
}
