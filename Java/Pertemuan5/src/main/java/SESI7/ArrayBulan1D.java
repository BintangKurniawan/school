package SESI7;

/**
 *
 * @author ACER
 */
public class ArrayBulan1D {
    public static void main(String[] args) {
        String[] Bulan;
        Bulan = new String[12];
        
        Bulan[0] = "Januari";
        Bulan[1] = "Februari";
        Bulan[2] = "Maret";
        Bulan[3] = "April";
        Bulan[4] = "Mei";
        Bulan[5] = "Juni";
        Bulan[6] = "Juli";
        Bulan[7] = "Agustus";
        Bulan[8] = "September";
        Bulan[9] = "Oktober";
        Bulan[10] = "November";
        Bulan[11] = "Desember";
        
        int[] JumlahHari = {31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};
        for (int i = 0; i < Bulan.length; i++) {
            System.out.println("Bulan " + Bulan[i] + " Memiliki " + JumlahHari[i] + " Hari");
        }
        
        String newBulan[][] = {{"Januari", "31"}, {"Februari", "28"}, {"Maret", "31"}, {"April", "30"}, {"Mei", "31"}, {"Juni", "30"},
            {"Juli", "31"}, {"Agustus", "31"}, {"September", "30"}, {"Oktober", "31"}, {"November", "30"}, {"Desember", "31"}
        };
        for (int i = 0; i < newBulan.length; i++) {
            System.out.println("Bulan " + newBulan[i][0] + " Memiliki " + newBulan[i][1] + " Hari");
        }
    }
}
