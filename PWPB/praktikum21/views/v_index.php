<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/global.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- TOASTR  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Bintang Kurniawan XI PPLG 1</title>
</head>

<body class="p-2">
    <div class="flex justify-between">
        <a href="tambah.php" class="font-bold text-green-500 hover:underline hover:text-green-500">Tambah Data</a>
        <h1 class="font-bold">Daftar Siswa</h1>
        <a href="logout.php" class="font-bold text-red-500 hover:underline hover:text-red-500">Logout</a>
    </div>
    <br>
    <br>
    <form action="index.php" method="get" class="flex justify-center gap-7  items-center">
        <input type="text" name="search" placeholder="Cari data Siswa..." value="<?= @$search ?>"
            class="bg-gray-50 rounded-lg shadow p-2">
        <button type="submit" class="font-bold text-sky-50 bg-blue-500 p-3 rounded-lg w-20">Cari</button>
        <a href="?">Refresh</a>
    </form>
    <br>
    <br>
    <div class="overflow-auto rounded-lg shadow">
        <table class="w-full ">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class=" py-2 px-1 text-sm font-semibold tracking-wide text-center">Foto</th>
                    <th class=" py-2 px-1 text-sm font-semibold tracking-wide text-center">
                        NIS
                        <a href="index.php?sort=nis&order=asc">▲</a>
                        <a href="index.php?sort=nis&order=desc">▼</a>
                    </th>
                    <th class=" py-2 px-1 text-sm font-semibold tracking-wide text-center">
                        Nama Lengkap
                        <a href="index.php?sort=nama&order=asc">▲</a>
                        <a href="index.php?sort=nama&order=desc">▼</a>
                    </th>
                    <th class=" py-2 px-1 text-sm font-semibold tracking-wide text-center">
                        Jenis Kelamin
                        <a href="index.php?sort=jenis_kelamin&order=asc">▲</a>
                        <a href="index.php?sort=jenis_kelamin&order=desc">▼</a>
                    </th>
                    <th class=" py-2 px-1 text-sm font-semibold tracking-wide text-center">
                        Kelas
                        <a href="index.php?sort=kelas&order=asc">▲</a>
                        <a href="index.php?sort=kelas&order=desc">▼</a>
                    </th>
                    <th class=" py-2 px-1 text-sm font-semibold tracking-wide text-center">
                        Jurusan
                        <a href="index.php?sort=jurusan&order=asc">▲</a>
                        <a href="index.php?sort=jurusan&order=desc">▼</a>
                    </th>
                    <th class=" py-2 px-1 text-sm font-semibold tracking-wide text-center">
                        Alamat
                        <a href="index.php?sort=alamat&order=asc">▲</a>
                        <a href="index.php?sort=alamat&order=desc">▼</a>
                    </th>
                    <th class=" py-2 px-1 text-sm font-semibold tracking-wide text-center">
                        Gol Darah
                        <a href="index.php?sort=gol_darah&order=asc">▲</a>
                        <a href="index.php?sort=gol_darah&order=desc">▼</a>
                    </th>
                    <th class=" py-2 px-1 text-sm font-semibold tracking-wide text-center">
                        Nama Ibu Kandung
                        <a href="index.php?sort=nama_ibu&order=asc">▲</a>
                        <a href="index.php?sort=nama_ibu&order=desc">▼</a>
                    </th>
                    <th class=" py-2 px-1 text-sm font-semibold tracking-wide text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php
            $i = 1;
            while($siswa = $listsiswa->fetch_array()){
        ?>
                <tr class="bg-gray-50">
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                        <img src="<?= @$siswa['file'] ? $siswa['file'] :'assets/images/sayuri.jpg' ?>" width="100">
                    </td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['nis'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['nama'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['jenis_kelamin'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['nama_kelas'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['nama_jurusan'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['alamat'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['gol_darah'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap"><?= $siswa['nama_ibu'] ?></td>
                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                        <a href="edit.php?nis=<?= $siswa['nis'] ?>"
                            class="font-bold text-blue-500 hover:underline">Edit</a>
                        <span>|</span>
                        <a href="delete.php?nis=<?= $siswa['nis']?>"
                            class="font-bold text-red-500 hover:underline hover:text-red-500 btnDelete">Delete</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

    </div>


    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary bg-blue-500 btnYa">Ya</button>
                    <button type="button" class="btn btn-danger bg-red-500" data-bs-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JS BOOTSTRAP  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <!-- JQUERY  -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- JS TOASTR  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
    $(function() {
        $(".btnDelete").on("click", function(e) {
            e.preventDefault();
            var nama = $(this).parent().parent().children()[2];
            nama = $(nama).html();
            var tr = $(this).parent().parent();
            $(".modal").modal('show');
            $(".modal-title").html('Konfirmasi');
            $(".modal-body").html('Anda yakin ingin menghapus data <b>' + nama + '</b> ?');
            var href = $(this).attr('href');
            $('.modal .btnYa').off()
            $('.modal .btnYa').on('click', function() {
                $.ajax({
                    'url': href,
                    'type': 'GET',
                    'success': function(data) {
                        if (data == 1) {
                            $('.modal').modal('hide')
                            tr.fadeOut()

                            toastr.success(`Data ${nama} berhasil dihapus`,
                                'BERHASIL')
                        } else {
                            toastr.error(`Data ${nama} gagal dihapus`, 'GAGAL')
                        }
                    }
                })
            });
        });
    });
    </script>
</body>

</html>