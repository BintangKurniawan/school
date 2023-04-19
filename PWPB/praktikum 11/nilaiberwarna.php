<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Menentukan Nilai Raport dan Index</h1>
    <form action="" method="Post">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td><label for="nama">Nilai Tugas</label></td>
                <td><input type="number" name="tugas" id=""></td>
            </tr>
            <tr>
                <td><label for="nama">Nilai Tes Harian</label></td>
                <td><input type="number" name="uh" id=""></td>
            </tr>
            <tr>
                <td><label for="nama">Nilai UTS</label></td>
                <td><input type="number" name="uts" id=""></td>
            </tr>
            <tr>
                <td><label for="nama">Nilai UAS</label></td>
                <td><input type="number" name="uas" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="kirim"></td>
            </tr>
        </table>
    </form>
    <br><br>
    <table>
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
            <td>Nilai Ulangan Harian</td>
            <td>:</td>
            <td>
                <?php
                    $uh = $_POST['uh'];
                    echo $uh;
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
        <tr>
            <td>Index</td>
            <td>:</td>
            <td>
                <span style="color: <?php
                    $color = ($hasil >= 80 ? "green": ($hasil >= 70 ? "blue": ($hasil >= 60? "yellow": ($hasil >= 50 ? "orange" : "red"))) );
                    echo $color;
                        ?>
                    ">
                    <?php
                        $index = ($hasil >= 80 ? "A": ($hasil >= 70 ? "B": ($hasil >= 60? "C": ($hasil >= 50 ? "D" : "E"))) );

                        echo $index;
                    ?>
                </span>
            </td>
        </tr>
    </table>
    
    
</body>
</html>