package com.mycompany.kashier;
import java.util.Scanner;

/**
 *
 * @author ACER
 */
public class Makanan {
    int harga;
    public int getHarga() {
        return harga;
    }
    public void menuMakanan() {

        String[] makanan = {"Bala-Bala", "Gehu", "Seblak"};
        double[] harga = {5000, 10000, 15000};
        for (int i = 0; i < makanan.length; i++) {
            System.out.println(i+1 + ". "+ makanan[i] + "   Rp. " + harga[i]);
        }
    }
    
    public void setHarga(String namaMakanan) {
        if (namaMakanan == "Bala-Bala") {
            this.harga = 5000;
        } else if (namaMakanan == "Gehu") {
            this.harga = 10000;
        }
          else if (namaMakanan == "Seblak") {
            this.harga = 15000;
        }
    }
    
    int jumlah;
    public int getJumlah() {
        return jumlah;
    }
    public void setJumlah(int jumlah) {
        this.jumlah = jumlah;
    }
    int nomorMakanan;
    public int getNomorMakanan() {
        return nomorMakanan;
    }
    
    public void setNomorMakanan(int nomorMakanan) {
        this.nomorMakanan = nomorMakanan;
    }
    String namaMakanan;
    public String getNamaMakanan() {
        return namaMakanan;
    }
    public void setNamaMakanan(int nomorMakanan) {
        if (nomorMakanan == 1) {
            this.namaMakanan = "Bala-Bala";
        } else if (nomorMakanan == 2) {
            this.namaMakanan = "Gehu";
        } else if (nomorMakanan == 3) {
            this.namaMakanan = "Seblak";
        }
    }
    
    double diskon;
    public double getDiskon() {
        return diskon;
    }
    public void setDiskon(int nomorMakanan) {
            if (nomorMakanan == 1) {
            this.diskon = 0.05;
        } else if (nomorMakanan == 2) {
            this.diskon = 0.10;
        } else if (nomorMakanan == 3) {
            this.diskon = 0.15;
        }
    }
    String namaMenu;
        public String getNamaMenu() {
            return namaMenu;
        }
        public void setNamaMenu(String namaMenu) {
            this.namaMenu = namaMenu;
        }
}
