package SESI4;
import java.util.Scanner;
/**
 *
 * @author ACER
 */
public class StudiKasus2 {
    public static void main(String[] args) {
        System.out.println("Mengkonversi Kilometer ke meter");
        Scanner input = new Scanner(System.in);
        System.out.println("Masukkan nilai kilometer = ");
        double angka = input.nextDouble();
        int konversi;
        konversi = (int) (angka * 1000);
        System.out.println("Satuan kilometer adalah: " + angka + " km");
        System.out.println("Satuan meter adalah: " + konversi + " m");
    }
}
