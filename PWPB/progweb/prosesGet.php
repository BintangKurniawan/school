<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <div id="hasil2">
        <?php
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];

        echo 'Halooo ini hasil pake get <br>';
        echo 'namamu, '. $nama . ' ya <br>';
        echo 'Ini alamatmu : '. $alamat . '<br>';
        ?>
    </div>
</body>
</html>