/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package implement;
import entity.barang;
import entity.pelanggan;
import interfc.barangInterfc;
import interfc.pelangganInterfc;
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
public class pelangganimpl implements pelangganInterfc {
    public pelanggan insert(pelanggan o) throws SQLException {
        PreparedStatement st = koneksi.getConnection().prepareStatement("insert into pelanggan values(?,?,?,?,?)");
        st.setString(1, o.getIdPelanggan());
        st.setString(2, o.getNama());
        st.setString(3, o.getJk());
        st.setString(4, o.getAlamat());
        st.setString(5, o.getNotelp());
        st.executeUpdate();
        return o;
    }
    public void update(pelanggan o) throws SQLException {
        PreparedStatement st = koneksi.getConnection().prepareStatement("update pelanggan set nama=?,jk=?,alamat=?,notelp=? where id_pelanggan=?");
        st.setString(1, o.getNama());
        st.setString(2, o.getJk());
        st.setString(3, o.getAlamat());
        st.setString(4, o.getNotelp());
        st.setString(5, o.getIdPelanggan());
        st.executeUpdate();
    }
    public void delete(String id_pelanggan) throws SQLException {
        PreparedStatement st = koneksi.getConnection().prepareStatement("delete from pelanggan where id_pelanggan=?");
        st.setString(1, id_pelanggan);
        st.executeUpdate();
    }
    public List<pelanggan> getAll() throws SQLException{
        Statement st = koneksi.getConnection().createStatement();
        ResultSet rs = st.executeQuery("select * from pelanggan");
        List<pelanggan>list= new ArrayList<pelanggan>();
        while(rs.next()) {
            pelanggan plg = new pelanggan();
            plg.setIdPelanggan(rs.getString("id_pelanggan"));
            plg.setNama(rs.getString("nama"));
            plg.setJk(rs.getString("jk"));
            plg.setAlamat(rs.getString("alamat"));
            plg.setNotelp(rs.getString("notelp"));
            list.add(plg);
        }
        return list;
    }
}
