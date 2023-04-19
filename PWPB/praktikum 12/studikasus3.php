<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>
<body>
    <h1>Hitung Jumlah Huruf</h1>
    <form action="" method="Post">
    <label for="nama">Masukkan Kalimat</label>
    <input type="text" name="nama">
    <input type="radio" name="huruf" value="a">a
    <input type="radio" name="huruf" value="i">i
    <input type="radio" name="huruf" value="u">u
    <input type="radio" name="huruf" value="e">e
    <input type="radio" name="huruf" value="o">o
    <input type="submit" value="Hitung">
    </form>
    <?php
        $kalimat = isset($_POST['nama']) ? $_POST['nama'] : "";
        $huruf = isset($_POST['huruf']) ? $_POST['huruf'] : "";
        $hurufLength = 0;

        $i = 0;
        while ($i <= strlen($kalimat)) {
            if (substr($kalimat, $i, 1) == $huruf) {
                $hurufLength += 1;
            }
            $i++;
        }

        echo "Jumlah huruf <u>$huruf</u> pada kalimat <u>$kalimat</u> adalah <u>$hurufLength</u>";

        ?>
</body>
</html>