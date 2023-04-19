<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nilai.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="Post">
        <table>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td><input type="text" name="nim" id=""></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td><label for="nama">Jurusan</label></td>
                <td><input type="text" name="jurusan" id=""></td>
            </tr>
            <tr>
                <td><label for="nama">Nilai Harian</label></td>
                <td><input type="number" name="uh" id=""></td>
            </tr>
            <tr>
                <td><label for="nama">Nilai Tugas</label></td>
                <td><input type="number" name="tugas" id=""></td>
            </tr>
            <tr>
                <td><label for="nama">Nilai UTS</label></td>
                <td><input type="number" name="uts" id=""></td>
            </tr>
            <tr>
                <td><label for="nama">Nilai UAS</label></td>
                <td><input type="number" name="uas" id=""></td>
            </tr>
            <center>
                <tr>
                    <td colspan="2" class="input"><input type="submit" value="hitung"></td>
                </tr>
            </center>
        </table>
    </form>
    <br><br>
    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>
                <?php
                    $nim = $_POST['nim'];
                    echo $nim
                ?>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <?php
                    $nama = $_POST['nama'];
                    echo $nama
                ?>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <?php
                    $jurusan = $_POST['jurusan'];
                    echo $jurusan
                ?>
            </td>
        </tr>
        <tr>
            <td>Nilai Harian</td>
            <td>:</td>
            <td>
                <?php
                    $uh = $_POST['uh'];
                    echo $uh;
                ?>
            </td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td>
                <?php
                    $tugas = $_POST['tugas'];
                    echo $tugas;
                ?>
            </td>
        </tr>
        <tr>
            <td>Nilai Uts</td>
            <td>:</td>
            <td>
                <?php
                    $uts = $_POST['uts'];
                    echo $uts;
                ?>
            </td>
        </tr>
        <tr>
            <td>Nilai Uas</td>
            <td>:</td>
            <td>
                <?php
                    $uas = $_POST['uas'];
                    echo $uas;
                ?>
            </td>
        </tr>
        <tr>
            <td>Nilai Akhir</td>
            <td>:</td>
            <td>
                <?php
                $hasil = ($tugas * 0.2) + ($uh * 0.1) + ($uts * 0.3) + ($uas * 0.4);
                echo $hasil;
                ?>
            </td>
        </tr>
    </table>
    
    
</body>
</html>