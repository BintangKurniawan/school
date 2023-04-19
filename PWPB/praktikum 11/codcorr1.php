<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="Post">
        <label for="ankga">Masukkan angka</label>
        <input type="number" name="angka">
        <input type="submit" value="submit">
    </form>
    <p>
        <?php
            $nilai = $_POST['angka'];
            $hasil = ($nilai > 70 ? "baik": "buruk");
            echo "hasilnya adalah " . $hasil . " dengan nilai " . $nilai;
        ?>
    </p>
</body>
</html>