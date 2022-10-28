/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package SESI2;

/**
 *
 * @author ACER
 */

class Kotak {
    double panjang;
    double lebar;
    double tinggi;
}

class DemoKotak1 {
    public static void main(String[] args) {
        double volume;
        Kotak k = new Kotak();
        
//        mengisikan nilai ke dalam data-data kelas kotak
        k.panjang = 4;
        k.lebar = 3;
        k.tinggi = 2;
        
//        menghitung isi/ volume kotak
        volume = k.panjang * k.tinggi * k.lebar;
        
//        menampilkan nilai volume ke layar monitor
        System.out.println("Volume Kotak = " + volume);
    }
}
