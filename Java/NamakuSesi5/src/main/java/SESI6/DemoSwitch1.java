package SESI6;

/**
 *
 * @author ACER
 */
public class DemoSwitch1 {
    public static void main(String[] args) {
        int noHari = 7;
        switch (noHari) {
            case 1:
                System.out.println("Hari ke-" + noHari + " adalah minggu");
                break;
            case 2:
                System.out.println("Hari ke-" + noHari + " adalah senin");
                break;
            case 3:
                System.out.println("Hari ke-" + noHari + " adalah selasa");
                break;
            case 4:
                System.out.println("Hari ke-" + noHari + " adalah rabu");
                break;
            case 5:
                System.out.println("Hari ke-" + noHari + " adalah kamis");
                break;
            case 6:
                System.out.println("Hari ke-" + noHari + " adalah jum/'at");
                break;
            case 7:
                System.out.println("Hari ke-" + noHari + " adalah sabtu");
                break;
            default:
                System.out.println("Tidak ada hari ke-" +noHari);
        }
    }
}
