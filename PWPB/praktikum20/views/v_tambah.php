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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <!-- <style type="style/text">
       body {
        background-color:black;
    }
    </style> -->
</head>

<body class="p-3">

    <form action="<?=  $action ?>" method="post"
        class="w-fit m-auto mt-10 rounded-lg shadow p-3 justify-center flex flex-col" enctype="multipart/form-data">
        <table class="w-full justify-center flex ">
            <tr style="display: <?= $nisAccess ?>">
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><label for="nis">NIS</label></td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <input class="bg-gray-50 rounded-lg shadow p-2" type="text" name="nis"
                        value="<?=  @$siswa['nis'] ?>"><br>
                </td>
            </tr>
            <tr>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><label for="nama">Nama Lengkap</label></td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <input class="bg-gray-50 rounded-lg shadow p-2" type="text" name="nama"
                        value="<?= @$siswa['nama'] ?>"> <br>
                </td>
            </tr>
            <tr>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><label for="jeniskelamin">Jenis Kelamin</label>
                </td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <input type="radio" name="jenis_kelamin" value="L"
                        <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P"
                        <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><label for="kelas">Kelas</label></td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <select name="kelas" class="bg-gray-50 rounded-lg shadow p-2">
                        <option value="XI-RPL1" <?= @$siswa['kelas'] == 'XI-RPL1' ? 'selected' : '' ?>>XI-RPL1</option>
                        <option value="XI-RPL2" <?= @$siswa['kelas'] == 'XI-RPL2' ? 'selected' : '' ?>>XI-RPL2</option>
                        <option value="XI-RPL3" <?= @$siswa['kelas'] == 'XI-RPL3' ? 'selected' : '' ?>>XI-RPL3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><label for="jurusan">Jurusan</label></td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <input class="bg-gray-50 rounded-lg shadow p-2" type="text" name="jurusan"
                        value="<?=  @$siswa['jurusan'] ?>">
                </td>
            </tr>
            <tr>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><label for="alamat">Alamat</label></td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <input class="bg-gray-50 rounded-lg shadow p-2" type="text" name="alamat"
                        value="<?=  @$siswa['alamat'] ?>">
                </td>
            </tr>
            <tr>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><label for="goldar">Golongan Darah</label></td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <select name="gol_darah" class="bg-gray-50 rounded-lg shadow p-2">
                        <option value="A" <?= @$siswa['gol_darah'] == 'A' ? 'selected' : '' ?>>A</option>
                        <option value="B" <?= @$siswa['gol_darah'] == 'B' ? 'selected' : '' ?>>B</option>
                        <option value="AB" <?= @$siswa['gol_darah'] == 'AB' ? 'selected' : '' ?>>AB</option>
                        <option value="O" <?= @$siswa['gol_darah'] == 'O' ? 'selected' : '' ?>>O</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><label for="namaibu">Nama Ibu Kandung</label>
                </td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <input class="bg-gray-50 rounded-lg shadow p-2" type="text" name="nama_ibu"
                        value="<?=  @$siswa['nama_ibu'] ?>">
                </td>
            </tr>
            <tr>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><label for="foto">Foto</label></td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <?php if ($action == "edit") { ?>
                    <img src="assets/images/<?= @$siswa['file'] ? $siswa['file'] :'default_picture.png' ?>"
                        class="w-[80px]">
                    <input type="hidden" name="foto" value="<?php echo @$result->file?>">
                    <?php } ?>
                    <input type="file" name="foto" accept="image/*">
                </td>
            </tr>
        </table>

        <input class="bg-gray-50 rounded-lg shadow p-2 cursor-pointer hover:shadow" type="submit" value="Simpan">
    </form>
</body>

</html>