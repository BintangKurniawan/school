/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package entity;

/**
 *
 * @author ACER
 */
public class pelanggan {
    private int id_pelanggan;
    private String nama;
    private String jk;
    private String alamat;
    private String notelp;
    String idPel = String.valueOf(id_pelanggan);
    public String getIdPelanggan() {
        return idPel;
    }
    public void setIdPelanggan(String idPel) {
        this.idPel = idPel;
    }
    public String getNama() {
        return nama;
    }
    public void setNama(String nama) {
        this.nama = nama;
    }
    public String getJk() {
        return jk;
    }
    public void setJk(String jk) {
        this.jk = jk;
    }
    public String getAlamat() {
        return alamat;
    }
    public void setAlamat(String alamat) {
        this.alamat = alamat;
    }
    public String getNotelp() {
        return notelp;
    }
    public void setNotelp(String notelp) {
        this.notelp = notelp;
    }
}
