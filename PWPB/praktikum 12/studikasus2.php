<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Jurusan Siswa</h1>
    <h4>SMKN 4 Bandung</h4>
    <form action="" method="Post">
        <label for="jumlah">Masukkan jumlah Data</label>
        <input type="number" name="jumlah">
        <input type="submit" value="ok">
    </form>
    <br><br>
    <table>
        <?php
        $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : 0;
            for ($i = 1; $i <= $jumlah; $i++ ) {
                echo "
                <tr>
                    <td><label>Nama:</label></td>
                    <td><input type='text' ></td>
                    <td>
                        <input type='radio' name='jurusan$i' value='rpl'>
                        <label for='rpl'>RPL</label><br>
                    </td>
                    <td>
                        <input type='radio' name='jurusan$i' value='tkj'>
                        <label for='tkj'>TKJ</label><br>
                    </td>
                    <td>
                        <input type='radio' name='jurusan$i' value='mm'>
                        <label for='mm'>MM</label>
                    </td>
                    <td>
                        <input type='radio' name='jurusan$i' value='av'>
                        <label for='av'>AV</label>
                    </td>
                    <td>
                        <input type='radio' name='jurusan$i' value='titl'>
                        <label for='titl'>TITL</label>
                    </td>
                    <td>
                        <input type='radio' name='jurusan$i' value='toi'>
                        <label for='toi'>TOI</label>
                    </td>
                </tr>
                ";
            }
        ?>
        <tr>
            <td colspan="8" style="text-align: center;"><input type="submit" value="Submit"></td>
        </tr>
    </table>
</body>
</html>