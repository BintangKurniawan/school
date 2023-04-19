<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>

<body class="p-3">
    <a href="tambah.php" class="font-bold text-green-500 hover:underline">Tambah Data</a><br>
    <a href="logout.php" class="font-bold text-red-500 hover:underline">Logout</a>
    <div class="overflow-auto rounded-lg shadow">
        <table class="w-full ">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="w-5 p-3 text-sm font-semibold tracking-wide text-left">#</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">NIS</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Nama Lengkap</th>
                    <th class="w-10 p-3 text-sm font-semibold tracking-wide text-left">Jenis Kelamin</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Kelas</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Jurusan</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Alamat</th>
                    <th class="w-10 p-3 text-sm font-semibold tracking-wide text-left">Gol Darah</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Nama Ibu Kandung</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php
            $i = 1;
            while($siswa = $listsiswa->fetch_array()){
        ?>
                <tr class="bg-gray-50">
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $i++ ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['nis'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['nama'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['jenis_kelamin'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['kelas'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['jurusan'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['alamat'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['gol_darah'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['nama_ibu'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                        <a href="edit.php?nis=<?= $siswa['nis'] ?>"
                            class="font-bold text-blue-500 hover:underline">Edit</a>
                        <span>|</span>
                        <a href="delete.php?nis=<?= $siswa['nis']?>"
                            class="font-bold text-red-500 hover:underline">Delete</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

    </div>
</body>

</html>