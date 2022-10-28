package SESI6;

/**
 *
 * @author ACER
 */
public class DemoWhile1 {
    public static void main(String[] args) {
           int n = 5;
        int hasil = 0;
        int i = 1;
        while (1<=n) {
            System.out.print(i);
            if (i != n) {
                System.out.print(" + ");
            }
            
            else {
                System.out.print(" = ");
            }
            
            hasil += i;
            i++;
        }
        System.out.println("hasil");
    
    }
}
