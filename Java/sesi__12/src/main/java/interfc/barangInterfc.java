/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package interfc;

import entity.barang;
import java.sql.SQLException;
import java.util.List;
/**
 *
 * @author ACER
 */
public interface barangInterfc {
    barang insert(barang o) throws SQLException;
    void update (barang o) throws SQLException;
    void delete (String kode_barang) throws SQLException;
    List getAll() throws SQLException;
}
