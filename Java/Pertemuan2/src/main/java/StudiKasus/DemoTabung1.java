/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package StudiKasus;

/**
 *
 * @author ACER
 */

class Tabung {
    double phi;
    double radius;
    double tinggi;
}

class DemoTabung1 {
    public static void main(String[] args) {
        double volume;
        Tabung t = new Tabung();
//        mengisi nilai
        t.phi = 3.14;
        t.radius = 9;
        t.tinggi = 12;
//        menghitung volume tabugn
        volume = t.phi *t.radius *t.radius * t.tinggi;
//        print
System.out.println("Volume tabung = " + volume);
    }
}
