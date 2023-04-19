<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Daftar Nilai</title>
    </head>
    <body>
        <h1>Daftar Nilai UN Siswa</h1> <br>
        <h3>SMKN 4 Bandung</h3>

        <form action="" method="Post">
        <table>
            <tr>
                <td><p>Nama</p> </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><p>Nilai B. Indonesia</p></td>
                <td><input type="number" name="id" ></td>
            </tr>
            <tr>
                <td><p>Nilai Matematika</p></td>
                <td><input type="number" name="mt" ></td>
            </tr>
            <tr>
                <td><p>Nilai B. Inggris</p></td>
                <td><input type="number" name="ig" ></td>
            </tr>
            <tr>
                <td><p>Nilai Teori Kejuruan</p></td>
                <td><input type="number" name="kj" ></td>
            </tr>
            <tr >
                <td></td>
                <td  ><button type="submit" value="kirim">Hitung</button></td>
            </tr>
        </table>
    </form>
    <p class="hasil">

        <?php
            $nama = $_POST['nama'];
            $id = $_POST['id'];
            $mt = $_POST['mt'];
            $ig = $_POST['ig'];
            $kj = $_POST['kj'];
            $hasil = $id + $mt + $ig + $kj;
            echo "Hasil nilai UN ". $nama . "  adalah  " . $hasil ;
        ?>
        </p>
    </body>
</html>