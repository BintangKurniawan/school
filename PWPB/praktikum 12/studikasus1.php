<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>
<body>
    <h1>Form Input Data Siswa</h1>
    <form action="" method="Post">
        <label for="jumlah">Masukkan jumlah Siswa</label>
        <input type="number" name="jumlah">
        <input type="submit" value="ok">
    </form>
    <table>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        <?php
        $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : 0;
            for ($i = 1; $i <= $jumlah; $i++ ) {
                echo "
                <tr>
                <td><input type='number' value='$i'></td>
                <td><input type='text' ></td>
                <td><input type='text' ></td>
                <td><input type='text' ></td>
                </tr>
                ";
            }
        ?>
    </table>
</body>
</html>