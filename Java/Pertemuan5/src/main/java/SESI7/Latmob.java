package SESI7;

import java.util.Scanner;
/**
 *
 * @author ACER
 */
public class Latmob {
    public static void main(String[] args) {
        int jmlhKota, jmlhjenisKendaraan;
         Scanner inp = new Scanner(System.in);
         System.out.println("Selamat Datang di Negeri Kuvukiland");
         System.out.println("=================================== \n");
         System.out.println("Masukkan jumlah kota: ");
         jmlhKota = inp.nextInt();
         
         System.out.println("Ada berapa jenis kendaraan: ");
         jmlhjenisKendaraan = inp.nextInt();
         inp.nextLine();
         
         String[] kota = new String[jmlhKota];
         System.out.println("       KOTA        ");
         System.out.println("===================");
         for (int i = 0; i < jmlhKota; i++) {
             System.out.println("Masukkan nama kota ke-" + (i +1) + ": ");
             kota[i] = inp.nextLine();
         }
         
         String[] jenisKendaraan = new String[jmlhjenisKendaraan];
         System.out.println("       JENIS KENDARAAN     ");
         System.out.println("===========================");
         for (int i = 0; i < jmlhKota; i++) {
             System.out.println("Masukkan jenis kendaraan ke-" + (i+1) + ": ");
             jenisKendaraan[i] = inp.nextLine();
         }
         
         int[][] ttalKendaraan = new int[jmlhKota][jmlhjenisKendaraan];
         for (int i = 0; i < jmlhKota; i++) {
             System.out.println("       "+ kota[i].toUpperCase() + "        ");
             for (int j = 0; j < jmlhjenisKendaraan; j++) {
                 System.out.println("Jumlah kendaraan " + jenisKendaraan[j] + " di kota " + kota[i] + ": ");
                 ttalKendaraan[i][j] = inp.nextInt();
             }
         }
         
         int[] totlKendaraan = new int[jmlhjenisKendaraan];
         int total = 0;
         System.out.println("       HASIL       ");
         System.out.println("===================");
         for (int i = 0; i < jmlhKota; i++) {
             System.out.println(" Kota " + kota[i]);
             int totalKota = 0;
             for (int j = 0; j < jmlhjenisKendaraan; j++) {
                 System.out.println(jenisKendaraan[j]+ ": " + ttalKendaraan[i][j]);
                 totalKota += ttalKendaraan[i][j];
                 totlKendaraan[i] += ttalKendaraan[i][j]; 
             }
             total += totalKota;
             System.out.println("+ Jumlah: " + totalKota);
             System.out.println("\n");
        }
         
         System.out.println("       JUMLAH KENDARAAN        ");
         System.out.println("===============================");
         for (int i = 0; i < jmlhjenisKendaraan; i++) {
             System.out.println(jenisKendaraan[i] + ": " + totlKendaraan[i]);
        }
         System.out.println("Total semua: " + total);
         inp.close();
    }
}
