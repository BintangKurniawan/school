<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>
<body>
    <?php
        $siswa = array(array("1314114590", "Tony", "MIF1"), array("1314114592", "Thor", "MIF2"), array("1314114593", "Bruce", "MIF3"));
        echo"<table border=\"1\">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
    ";
    for($i = 0; $i < 3; $i++) {
        echo"<tr>";
        for($j = 0; $j < 3; $j++) {
            echo "<td>". $siswa[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>