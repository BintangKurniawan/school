<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $t = date ('d');
        echo "<h3>Ini adalah 1 Aksi</h3>";
        echo "Hari ini adalah tanggal " . $t . " merupakan " . ($t <= 10 ? 'Awal Bulan': '');
    ?>
    <?php
            $t = date ("d");
            echo "<h3>Ini adalah 2 Aksi</h3>";
            echo "Hari ini tanggal " . $t . " merupakan " . ($t <= 10? 'awal bulan': 'akhir bulan');
        ?>
        <?php
            $t = date ("d");
            echo "<h3>Ini adalah 3 Aksi</h3>";
            echo "Hari ini tanggal " . $t . " merupakan " . ($t <= 10? 'awal bulan': ($t <= 20 ? 'pertengahan bulan': 'akhir bulan'));
        ?>
</body>
</html>