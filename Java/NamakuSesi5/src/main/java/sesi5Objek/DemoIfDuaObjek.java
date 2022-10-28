package sesi5Objek;
/**
 *
 * @author ACER
 */
public class DemoIfDuaObjek {
    public void checkBilangan (int bilangan) {
        if (bilangan < 0) {
            System.out.println(bilangan + " merupakan bilangan NEGATIF.");
        } else if (bilangan == 0) {
            System.out.println("Nilai yang dimasukkan adalah 0.");
        } else {
            System.out.println(bilangan + " merupakan bilangan POSITIF.");
        }
    }
}
