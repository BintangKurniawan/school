/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package StudiKasus;

/**
 *
 * @author ACER
 */
class DemoTabung2 {
    public static void main(String[] args) {
        double volume1, volume2;
        Tabung k1 = new Tabung();
        Tabung k2 = new Tabung();
//        mengisi nilai
        k1.phi = 3.14;
        k1.radius = 9;
        k1.tinggi = 12;
        
        k2.phi = 3.14;
        k2.radius = 3;
        k2.tinggi = 6;
        
        volume1 = k1.phi * k1.radius * k1.radius * k1.tinggi;
        volume2 = k2.phi * k2.radius * k2.radius * k2.tinggi;
        
        System.out.println("Volume k1 = " + volume1);
        System.out.println("Volume k2 = " + volume2);
    }
}
