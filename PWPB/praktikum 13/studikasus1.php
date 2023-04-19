<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body
        {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        flex-direction: column;
        }

        th {
            background-color: lightblue;
        }
        td {
            background-color: lightskyblue;
        }
    </style>
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>
<body>
    <h1>DATA SISWA MIF</h1>
    <?php
        $siswa = array(array("1314115690", "Harry Maguire", "MIF1", "MIF"), array("1314115692", "Fred", "MIF2", "MIF"), array("1314115693", "Jammie Carragher", "MIF3", "MIF"), array("1314115699", "Gary Neville", "MIF1", "MIF"));
        echo"<table border=\"1\">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
    ";
    for($i = 0; $i < 4; $i++) {
        echo"<tr>";
        for($j = 0; $j < 4; $j++) {
            echo "<td>". $siswa[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>