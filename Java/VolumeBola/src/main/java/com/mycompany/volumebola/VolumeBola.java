/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */

package com.mycompany.volumebola;

/**
 *
 * @author ACER
 */
public class VolumeBola {

    public double ruas;
    public double volume;
    double pi = 3.14;
    double PtperTiga = 4/3;
    
    public void setRuas (double ruas) {
        this.ruas = ruas;
    }
    
    public double getRuas () {
        return ruas;
    }
    
    public double HitungVolume () {
        volume = PtperTiga * pi * ruas * ruas *ruas;
        return volume;
    }
}
