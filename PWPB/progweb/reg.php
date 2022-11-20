<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <form action="lihat.php" method="post">
        <table>
            <tr>
                <th colspan="2">PENDAFTARAN</th>
            </tr>
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Nama Belakang</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td><input type="text" name="ttl"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenkel" id="pria" value="Pria">Laki-laki
                    <input type="radio" name="jenkel" id="wanita" value="Wanita">Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    <textarea name="alamat" id="alamat"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="Kirim">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>