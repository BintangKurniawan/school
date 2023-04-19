<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            font-size: 42px;
        }
    </style>
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>
<body>
    <?php
        function tampil_identitas($nama, $kelas, $alamat) {
            echo "Nama Saya ". $nama . "<br>";
            echo "Kelas Saya " . $kelas . "<br>";
            echo "Alamat Saya di " . $alamat . "<br>";
        }
        function hitung_umur($tahun_lahir, $tahun_skrg) {
            return $tahun_skrg - $tahun_lahir;
        }
        tampil_identitas("Bintang", "XI RPL", "Bandung");
        $umur_saya = hitung_umur(2005, 2023);
        echo "Umur Saya " . $umur_saya . " tahun";
    ?>
</body>
</html>