/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package StudiKasus;

/**
 *
 * @author ACER
 */
class Limas {
    double alas;
    double tinggi;
    double tinggiLimas;
//    mendefinisikan method dgn parameter
    void isiData(double a, double t, double tL) {
        alas = a;
        tinggi = t;
        tinggiLimas = tL;
    }
    
    double hitungVolume(){
        return(0.333 * 0.5 * alas * tinggi * tinggiLimas);
    }
}

class DemoLimasSegitiga {
    public static void main(String[] args) {
        Limas l;
//        instansiasi objek
        l = new Limas();
//        memanggil method isiData()
        l.isiData(5, 8, 4);
        System.out.println("Volume Limas Segitiga = " + l.hitungVolume());
    }
}
