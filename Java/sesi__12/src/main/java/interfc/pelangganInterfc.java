/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package interfc;

import entity.pelanggan;
import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author ACER
 */
public interface pelangganInterfc {
    pelanggan insert (pelanggan o) throws SQLException;
    void update (pelanggan o) throws SQLException;
    void delete (String id_pelanggan) throws SQLException;
    List getAll() throws SQLException;
}
