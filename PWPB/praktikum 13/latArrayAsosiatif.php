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
            $siswa = array ('1314115698' => 'Loki', '1314115699' => 'Thor', "1314115700" => 'Stephen' );
            echo $siswa['1314115698'] . "<br>";
            echo $siswa['1314115699'] . "<br>";
            echo $siswa['1314115700'];
        ?>
    </p>
</body>
</html>