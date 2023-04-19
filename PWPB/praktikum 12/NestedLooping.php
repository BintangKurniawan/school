<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang Kurniawan</title>
</head>
<body>
    <p>
        <?php
        $jumlah = 5;
        for($i = 1; $i <= $jumlah; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "X";
            }
            echo "<br>";
        }
        ?>
    </p>
</body>
</html>