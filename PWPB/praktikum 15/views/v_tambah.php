<?php
    $action = 'tambah.php';
    if(!empty($siswa)) $action = 'edit.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="<?=  $action ?>" method="post">
        <table>
            <tr>
                <td><label for="nis">NIS</label></td>
                <td>
                    <input type="text" name="nis" value="<?=  @$siswa['nis'] ?>"><br>
                </td>
            </tr>
            <tr>
                <td><label for="nama">Nama Lengkap</label></td>
                <td>
                    <input type="text" name="nama_lengkap" value="<?= @$siswa['nama_lengkap'] ?>"> <br>
                </td>
            </tr>
            <tr>
                <td><label for="jeniskelamin">Jenis Kelamin</label></td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?> >Laki-Laki 
                    <input type="radio" name="jenis_kelamin" value="P" <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?> >Perempuan 
                </td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td>
                    <select name="kelas">
                        <option value="XI-RPL1" <?= @$siswa['kelas'] == 'XI-RPL1' ? 'selected' : '' ?> >XI-RPL1</option>
                        <option value="XI-RPL2" <?= @$siswa['kelas'] == 'XI-RPL2' ? 'selected' : '' ?> >XI-RPL2</option>
                        <option value="XI-RPL3" <?= @$siswa['kelas'] == 'XI-RPL3' ? 'selected' : '' ?> >XI-RPL3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>
                    <input type="text" name="jurusan" value="<?=  @$siswa['jurusan'] ?>" >
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
                    <input type="text" name="gol_darah" value="<?= @$siswa['gol_darah'] ?>">
                </td>
            </tr>
            <tr>
                <td><label for="namaibukandung">Nama Ibu Kandung</label></td>
                <td>
                    <input type="text" name="nama_ibu_kandung" value="<?=  @$siswa['nama_ibu_kandung'] ?>">
                </td>
            </tr>
        </table>
        
        <input type="submit" value="Simpan">
    </form>
</body>
</html>