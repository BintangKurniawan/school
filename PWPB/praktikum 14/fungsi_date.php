<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{font-size: 24px;}
    </style>
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>
<body>
    <p>
        <?php
        date_default_timezone_set('Asia/Jakarta');

            echo "Ini format tanggal di Indonesia: ";
            echo date("d F Y") . "<br>";
            echo "Ini format tanggal System: ";
            echo date("l, F d, Y") . "<br>";
            echo "Ini format date database: ";
            echo date("Y-m-d") . "<br>";
            echo "Ini format waktu System: ";
            echo date("g:i A") . "<br>";
            echo "Ini format waktu Indonesia: ";
            echo date("G:i") . "<br>";
        ?>  
    </p>
</body>
</html>