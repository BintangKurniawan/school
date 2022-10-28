/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */

package com.mycompany.lingkaran;

/**
 *
 * @author ACER
 */
public class Lingkaran {

    public double ruas;
    double pi = 3.14;
    public double luas;
    
    public void setRuas(double ruas) {
        this.ruas = ruas;
    }
    
    public double getRuas() {
        return ruas;
    }
    
    public double HitungLuas() {
        luas = pi * ruas;
        return luas;
    }
}
