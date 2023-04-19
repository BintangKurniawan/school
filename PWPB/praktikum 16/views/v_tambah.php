<?php
    $action = 'tambah.php';
    $nisAccess = '';
    if(!empty($siswa)) $action = 'edit.php';
    if(!empty($siswa)) $nisAccess = "none";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style type="style/text">
       body {
        background-color:black;
    }
    </style> -->
</head>

<body>

    <form action="<?=  $action ?>" method="post">
        <table>
            <tr style="display: <?= $nisAccess ?>">
                <td><label for="nis">NIS</label></td>
                <td>
                    <input type="text" name="nis" value="<?=  @$siswa['nis'] ?>"><br>
                </td>
            </tr>
            <tr>
                <td><label for="nama">Nama Lengkap</label></td>
                <td>
                    <input type="text" name="nama" value="<?= @$siswa['nama'] ?>"> <br>
                </td>
            </tr>
            <tr>
                <td><label for="jeniskelamin">Jenis Kelamin</label></td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L"
                        <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P"
                        <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td>
                    <select name="kelas">
                        <option value="XI-RPL1" <?= @$siswa['kelas'] == 'XI-RPL1' ? 'selected' : '' ?>>XI-RPL1</option>
                        <option value="XI-RPL2" <?= @$siswa['kelas'] == 'XI-RPL2' ? 'selected' : '' ?>>XI-RPL2</option>
                        <option value="XI-RPL3" <?= @$siswa['kelas'] == 'XI-RPL3' ? 'selected' : '' ?>>XI-RPL3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>
                    <input type="text" name="jurusan" value="<?=  @$siswa['jurusan'] ?>">
                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>
                    <input type="text" name="alamat" value="<?=  @$siswa['alamat'] ?>">
                </td>
            </tr>
            <tr>
                <td><label for="goldar">Golongan Darah</label></td>
                <td>
                    <select name="gol_darah">
                        <option value="A" <?= @$siswa['gol_darah'] == 'A' ? 'selected' : '' ?>>A</option>
                        <option value="B" <?= @$siswa['gol_darah'] == 'B' ? 'selected' : '' ?>>B</option>
                        <option value="AB" <?= @$siswa['gol_darah'] == 'AB' ? 'selected' : '' ?>>AB</option>
                        <option value="O" <?= @$siswa['gol_darah'] == 'O' ? 'selected' : '' ?>>O</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="namaibu">Nama Ibu Kandung</label></td>
                <td>
                    <input type="text" name="nama_ibu" value="<?=  @$siswa['nama_ibu'] ?>">
                </td>
            </tr>
        </table>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>