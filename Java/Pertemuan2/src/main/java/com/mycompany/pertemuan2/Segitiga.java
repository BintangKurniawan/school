/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.pertemuan2;

/**
 *
 * @author ACER
 */
public class Segitiga {
    public double alas;
    public double tinggi;
    public double luas;
    
    public void setAlas(double alas) {
        this.alas = alas;
    }
    public void setTinggi(double tinggi) {
        this.tinggi = tinggi;
    }
    
    public double getAlas() {
        return alas;
    }
    public double getTinggi() {
        return tinggi;
    }
    
    public double HitungLuas() {
        luas = 0.5 * alas * tinggi;
        return luas;
    }
}
