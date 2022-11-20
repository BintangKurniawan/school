<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi</title>
</head>
<body>
    <p id="hasil">
        <?php
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            echo 'Halooo ' . $nama . '<br>';
            echo ''. $alamat . ' pasti adalah alamatmu, ya';
        ?>
    </p>
</body>
</html>