<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>
<body>
    <a href="tambah.php">Tambah Data</a><br><br>
<table border='1'>
    <thead>
        <tr>
            <th>#</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Gol Darah</th>
            <th>Nama Ibu Kandung</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            while($siswa = $listsiswa->fetch_array()){
        ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $siswa['nis'] ?></td>
            <td><?= $siswa['nama_lengkap'] ?></td>
            <td><?= $siswa['jenis_kelamin'] ?></td>
            <td><?= $siswa['kelas'] ?></td>
            <td><?= $siswa['jurusan'] ?></td>
            <td><?= $siswa['alamat'] ?></td>
            <td><?= $siswa['gol_darah'] ?></td>
            <td><?= $siswa['nama_ibu_kandung'] ?></td>
            <td>
                <a href="edit.php?nis=<?= $siswa['nis'] ?>">Edit</a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
</body>
</html>