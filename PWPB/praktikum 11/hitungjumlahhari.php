<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hitung jumlah hari</title>
</head>
<body>
    <h1>Menghitung Jumlah Hari</h1>
    <form action="" method="Post">
        <table>
            <tr>
                <td>Bulan: </td>
                <td>
                    <select name="bulan">
                        <?php
                        $bulan_array = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        foreach ($bulan_array as $bulan) {
                        echo "<option value='$bulan'>$bulan</option>";
                        }
                    ?>
                    </select>
                </td>
                <td>Tahun:</td>
                <td><input type="number" name="tahun"></td>
                <td><input type="submit" name="kirim"></td>
            </tr>
        </table>
    </form>

    
    <p>

    <?php
        $bulan = $_POST ['bulan'];
        $tahun = $_POST['tahun'];        
        $bulan_array = array(array("1", "31", "Januari"), array("2", "28", "Februari"), array("3", "31", "Maret"), array("4", "30", "April"), array("5", "31", "Mei"), array("6", "30", "Juni"), array("7", "31", "Juli"), array("8", "31", "Agustus"), array("9", "30", "September"), array("10", "31", "Oktober"), array("11", "30", "November"), array("12", "31", "Desember"));

        if ($tahun % 4 == 0) {
        $bulan_array[1][1] = 29;
        } else {
        $bulan_array[1][1] = 28;
        }

        foreach ($bulan_array as $row) {
            foreach ($row as $item) {
                if ($item == $bulan) {
                    echo "Jumlah hari di bulan " . $row[2] . " pada tahun " . $tahun . " adalah " . $row[1];
                    
                    break 2;
                }
            }
        }

       
    ?>
    </p>
</body>
</html>

