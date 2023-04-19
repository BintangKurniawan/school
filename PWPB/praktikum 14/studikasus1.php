<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>
<body>
    <h1>MONEY CHANGER &#x1F4B5;</h1>
    <table border="1">
        <tr>
            <th>Mata Uang Asing</th>
            <th>Mata Uang Indonesia</th>
        </tr>
        <tr>
            <td>Dollar Amerika</td>
            <td>12000</td>
        </tr>
        <tr>
            <td>Dollar Singapura</td>
            <td>7000</td>
        </tr>
        <tr>
            <td>Yen</td>
            <td>4000</td>
        </tr>
        <tr>
            <td>Won</td>
            <td>11</td>
        </tr>
    </table>
    <h1>TRANSAKSI</h1>
    <div>
        <form action="" method="post">
            <label for="changer">Uang Dalam Rupiah Rp.</label>
            <input type="number" name="uang" id="uang">
            <select id="currency" name="kurensi" required>
                <option value="USD">Dollar Amerika</option>
                <option value="SGD">Dollar Singapura</option>
                <option value="JPY">Yen</option>
                <option value="KRW">Won</option>
            </select>
            <input type="submit" value="Konversi">
        </form>
    </div>
        <p>
            <?php
            $uang = isset($_POST['uang']) ? $_POST['uang'] : 0;
            $kurensi = isset($_POST['kurensi']) ? $_POST['kurensi'] : "";
            $rate = 0;
            $mataUang= " ";

            switch($kurensi) {
                case "USD":
                    $mataUang= "USD";
                    $rate = 12000;
                    break;
                case "SGD":
                    $mataUang= "SGD";
                    $rate = 7000;
                    break;
                case "JPY":
                    $mataUang= "JPY";
                    $rate = 4000;
                    break;
                case "KRW":
                    $mataUang= "KRW";
                    $rate = 11;
                    break;
                default:
                    $mataUang= " ";
                    $rate = 0;
                    break;
            }

            if($rate != 0) {
                $hasilKonversi = $uang / $rate;
                echo "Rp. " . $uang . " = " . number_format($hasilKonversi, 2) . " " . $mataUang;
            } else {
                echo "Mata uang tidak tersedia";
            }
            ?>
        </p>
</body>
</html>