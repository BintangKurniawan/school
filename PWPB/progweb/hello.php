<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halo in php</title>
    <style>
        body {
            background-color: red;
            color: white;
        }
        p {
            font-size: 30px;
        }
    </style>
</head>
<body>
    <p>
        <?php
            $nama_saya = "Kevin Kaslana";
            $kelas = "XI PPLG 1";
            $nis = "2021118075";
            $umur = 17;
            $berat_badan = 55.75;

            echo("Nama Saya $nama_saya <br/>");
            echo("sekarang kelas $kelas dan NIS saya $nis <br/>");
            echo("Umur saya sekarang adalah ". $umur . " tahun <br/>");
            echo("Berat badan saya $berat_badan Kg");
        ?>
    </p>
</body>
</html>