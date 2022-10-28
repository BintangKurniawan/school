package SESI6;

/**
 *
 * @author ACER
 */
public class DemoSwitch2 {
    public static void main(String[] args) {
        int a=2, b;
        switch(a) {
            case 1: b = a +1;
            case 2: b = a +2;
            case 3: b = a +3;
            case 4: b = a +4;
            case 5: b = a +5;
            default: b = 1;
        }
        System.out.println("Nilai b: " + b);
    }
}
