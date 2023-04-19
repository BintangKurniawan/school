/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package implement;

import entity.barang;
import interfc.barangInterfc;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import penjualan.koneksi.koneksi;

/**
 *
 * @author ACER
 */
public class barangimplement implements barangInterfc {
//    insert ke database
    public barang insert(barang o) throws SQLException {
        PreparedStatement st = koneksi.getConnection().prepareStatement("insert into barang values(?,?,?,?)");
        st.setString(1, o.getKodeBarang());
        st.setString(2, o.getNamaBarang());
        st.setString(3, o.getJumlah() + " ");
        st.setString(4, o.getHarga() + " ");
        st.executeUpdate();
        return o;
    }
//    update
    public void update(barang o) throws SQLException {
        PreparedStatement st = koneksi.getConnection().prepareStatement("update barang set nama_barang=?,harga_barang=?,stok_barang=? where kode_barang=?");
        st.setString(1, o.getKodeBarang());
        st.setString(2, o.getNamaBarang());
        st.setString(3, o.getJumlah());
        st.setString(4, o.getHarga());
        st.executeUpdate();
    }
//    delete
    public void delete(String kode_barang) throws SQLException {
            PreparedStatement st = koneksi.getConnection().prepareStatement("delete from barang where kode_barang=?");
        st.setString(1, kode_barang);
        st.executeUpdate();
    }
//    select/view
    public List<barang> getAll() throws SQLException {
        Statement st = koneksi.getConnection().createStatement();
        ResultSet rs = st.executeQuery("select * from barang");
        List<barang>list = new ArrayList<barang>();
        while(rs.next()) {
            barang brg = new barang();
            brg.setKodeBarang(rs.getString("kode_barang"));
            brg.setNamaBarang(rs.getString("nama_barang"));
            brg.setJumlah(rs.getString("stok_barang"));
            brg.setHarga(rs.getString("harga_barang"));
            list.add(brg);
        }
        return list;
    }
}
