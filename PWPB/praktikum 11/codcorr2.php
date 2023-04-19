<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            $t = date ("d");
            if ($t <= 10) {
                echo "Awal bulan";
            }
        ?>
        <!-- tanpa ternary if-else -->
        <?php
            $d = date ("d");
            if ($d <= 10) {
                echo "Awal bulan";
            } else {
                echo "Tanggal " . $d . " Sudah melebihi awal bulan";
            }
        ?>
    </p>
</body>
</html>