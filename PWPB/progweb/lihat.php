<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <div id="hasil">
        <?php
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $ttl = $_POST['ttl'];
        $jenkel = $_POST['jenkel'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];

        echo 'Selamat datang, '.$fname. ' '. $lname.' , anda telah berhasil daftar. Data diri anda : <br>';
        echo 'Tempat, Tanggal lahir : '. $ttl. '<br>';
        echo "Jenis kelamin :".$jenkel." <br>";
        echo 'Agama : '. $agama . '<br>';
        echo 'Alamat : '. $alamat . '<br>';
        ?>
    </div>
</body>
</html>