<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>
<body>
    <p>
        <?php
            $siswa = array ('1314115698' => 'Wanda', '1314115699' => 'Nakia', "1314115700" => 'Carol' );
            foreach($siswa as $nis => $nm_siswa) {
                echo $nm_siswa . " memiliki NIS " . $nis . "<br>";
            }
        ?>
    </p>
</body>
</html>