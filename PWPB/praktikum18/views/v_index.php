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
    <div class="flex justify-between">
        <a href="tambah.php" class="font-bold text-green-500 hover:underline">Tambah Data</a><br>
        <a href="logout.php" class="font-bold text-red-500 hover:underline">Logout</a>
    </div>
    <br>
    <br>
    <form action="index.php" method="get" class="flex justify-center gap-7  items-center">
        Cari Data Siswa
        <input type="text" name="search" value="<?= @$search ?>" class="bg-gray-50 rounded-lg shadow p-2">
        <button type="submit" class="font-bold text-sky-50 bg-blue-500 p-3 rounded-lg w-25">Cari</button>
        <a href="?">Refresh</a>
    </form>
    <br>
    <br>
    <div class="overflow-auto rounded-lg shadow">
        <table class="w-full ">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="w-5 p-3 text-sm font-semibold tracking-wide text-left">#</th>
                    <th class="w-10 p-3 text-sm font-semibold tracking-wide text-left">
                        NIS
                        <a href="index.php?sort=nis&order=asc">▲</a>
                        <a href="index.php?sort=nis&order=desc">▼</a>
                    </th>
                    <th class="w-15 p-3 text-sm font-semibold tracking-wide text-left">
                        Nama Lengkap
                        <a href="index.php?sort=nama&order=asc">▲</a>
                        <a href="index.php?sort=nama&order=desc">▼</a>
                    </th>
                    <th class="w-13 p-3 text-sm font-semibold tracking-wide text-left">
                        Jenis Kelamin
                        <a href="index.php?sort=jenis_kelamin&order=asc">▲</a>
                        <a href="index.php?sort=jenis_kelamin&order=desc">▼</a>
                    </th>
                    <th class="w-13 p-3 text-sm font-semibold tracking-wide text-left">
                        Kelas
                        <a href="index.php?sort=kelas&order=asc">▲</a>
                        <a href="index.php?sort=kelas&order=desc">▼</a>
                    </th>
                    <th class="w-13 p-3 text-sm font-semibold tracking-wide text-left">
                        Jurusan
                        <a href="index.php?sort=jurusan&order=asc">▲</a>
                        <a href="index.php?sort=jurusan&order=desc">▼</a>
                    </th>
                    <th class="w-13 p-3 text-sm font-semibold tracking-wide text-left">
                        Alamat
                        <a href="index.php?sort=alamat&order=asc">▲</a>
                        <a href="index.php?sort=alamat&order=desc">▼</a>
                    </th>
                    <th class="w-13 p-3 text-sm font-semibold tracking-wide text-left">
                        Gol Darah
                        <a href="index.php?sort=gol_darah&order=asc">▲</a>
                        <a href="index.php?sort=gol_darah&order=desc">▼</a>
                    </th>
                    <th class="w-13 p-3 text-sm font-semibold tracking-wide text-left">
                        Nama Ibu Kandung
                        <a href="index.php?sort=nama_ibu&order=asc">▲</a>
                        <a href="index.php?sort=nama_ibu&order=desc">▼</a>
                    </th>
                    <th class="w-10 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
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