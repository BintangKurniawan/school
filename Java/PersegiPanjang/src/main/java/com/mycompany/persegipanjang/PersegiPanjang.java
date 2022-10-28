/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */

package com.mycompany.persegipanjang;


/**
 *
 * @author ACER
 */
public class PersegiPanjang {

    public double panjang;
    public double lebar;
    public double luas;
    
    public void setPanjang(double panjang) {
        this.panjang = panjang;
    }
    
    public void setLebar(double lebar) {
        this.lebar = lebar;
    }
    
    public double getPanjang() {
        return panjang;
    }
    
    public double getLebar() {
        return lebar;
    }
    
    public double HitungLuas() {
        luas = panjang * lebar;
        return luas;
    }
}
