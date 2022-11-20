package com.mycompany.kashier;
import java.util.Scanner;
/**
 *
 * @author ACER
 */
public class Penjualan {
    int jumlah1;

    public int getJumlah1() {
        return jumlah1;
    }

    public void setJumlah1(int jumlah1) {
        this.jumlah1 = jumlah1;
    }

    int jumlah2;

    public int getJumlah2() {
        return jumlah2;
    }

    public void setJumlah2(int jumlah2) {
        this.jumlah2 = jumlah2;
    }

    int harga1;

    public int getHarga1() {
        return harga1;
    }

    public void setHarga1(int harga1) {
        this.harga1 = harga1;
    }

    int harga2;

    public int getHarga2() {
        return harga2;
    }

    public void setHarga2(int harga2) {
        this.harga2 = harga2;
    }

    double hargaDiskon;

    public double getHargaDiskon() {
        return hargaDiskon;
    }

    public void setHargaDiskon(double hargaDiskon) {
        hargaDiskon = (getDiskon1() - getHarga1()) + ((getDiskon2() - getHarga2()));
        this.hargaDiskon = hargaDiskon;

    }

    boolean member;

    public boolean isMember() {
        return member;
    }

    public void setMember(boolean member) {
        this.member = member;
    }

    double diskon1;

    public double getDiskon1() {
        return diskon1;
    }

    public void setDiskon1(double diskon1) {
        diskon1 = getHarga1() * diskon1;
        this.diskon1 = diskon1;
    }

    double diskon2;

    public double getDiskon2() {
        return diskon2;
    }

    public void setDiskon2(double diskon2) {
        diskon2 = getHarga2() * diskon2;
        this.diskon2 = diskon2;
    }

    int uang;

    public int getUang() {
        return uang;
    }
    
    public int getTotal() {
        return getHarga1() * getJumlah1() + getHarga2() * getJumlah2();
    }

    public void setUang(int uang) {
        this.uang = uang;
    }

}
