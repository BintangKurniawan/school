<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newview.css">
    <title>Post Coy</title>
</head>
<body>
<form action="viewpost.php" method="post">
        <table>
            <tr>
                <th colspan="2">Word is A Weapon</th>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Tanggal & Waktu Post</td>
                <td>
                    <input type="datetime-local" name="tgl">
                </td>
            </tr>
            <tr>
                <td>Judul Berita</td>
                <td>
                    <input type="text" name="judul">
                </td>
            </tr>

            <tr>
                <td>
                <input type="submit" value="Kirim">
                </td>
            </tr>
        </table>
        <table>
            <tr><th>Isi Berita</th></tr>
            <tr>
                <td>
                    <textarea name="isi" cols="100" rows="10"></textarea>
                </td>
            </tr>
        </table>
    </form>

    <div class="img">
        <img src="img/logo4v-2.png" alt="">
    </div>
</body>
</html>