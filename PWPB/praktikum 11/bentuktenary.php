<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi kasus 3</title>
</head>
<body>
    <form action="" method="Post">
        <label for="ankga">Masukkan angka</label>
        <input type="number" name="angka">
        <input type="submit" value="submit">
    </form>
    <p>
        <?php
            $angka = $_POST['angka'];
            $hasil = ($angka > 0 ? "positif" : "negatif");
            echo "angka $angka merupakan bilangan $hasil";
        ?>
    </p>
</body>
</html>