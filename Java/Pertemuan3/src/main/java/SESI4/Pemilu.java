package SESI4;
import java.util.Scanner;
 
/**
 *
 * @author ACER
 */
public class Pemilu {
    public static void main(String[] args) {
        System.out.println("Program Penentuan Calon Pemilih");
        Scanner input = new Scanner(System.in);
        System.out.println("Silakan Masukkan Umur Anda : ");
        int umur = input.nextInt();
        if (umur < 17) {
            System.out.println("Maaf anda tidak berhak mengikuti pemilu");
        }
        else {
            System.out.println("Selamat anda berhak mengikuti pemilu");
        }
    }
}
