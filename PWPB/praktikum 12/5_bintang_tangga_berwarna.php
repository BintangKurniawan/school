<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bintang Kurniawan XI PPLG 1</title>
    <style>
        .kotak {
  width: 20px;
  height: 20px;
  margin: 1px;
}

    </style>
</head>
<body>
    <?php
            $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : 0;
            $warna = isset($_POST['warna']) ? $_POST['warna'] : "";
$balok = "<span class=\"kotak\" style=\"background-color: $warna;\"></span>";
    ?>
    <h1>Tangga Berwarna</h1>
    <form action="" method="Post" class="form">
        <table>
            <tr>
                <td>
                    <label for="jumlah">Jumlah Anak Tangga</label>
                </td>
                <td>
                    <input type="number" name="jumlah">
                </td>
            </tr>
            <tr>
                <td><label for="warna">Warna</label></td>
                <td>
                    <input type="radio" name="warna" value="green">Hijau
                    <input type="radio" name="warna" value="purple">Ungu
                    <input type="radio" name="warna" value="yellow">Kuning
                    <input type="radio" name="warna" value="blue">Biru
                    <input type="radio" name="warna" value="grey">Abu
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
            
                <input type="submit" value="Buat Tangga">
            </td>
            </tr>
        </table>

        
    </form>
    <div style="width: fit-content; margin:auto;">
        <?php        
        for($i = 0; $i <= $jumlah; $i++) {
            echo("<div style = \"display: flex;\">");
            for ($j = 0; $j <= $i; $j++) {
                if ($j < $i) {
                    echo("$balok");
                } else {
                    echo("<br>");
                }
            }
            echo("</div>");
        }
        ?>
        </div>
</body>
</html>