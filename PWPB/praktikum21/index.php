<?php
    include 'lib/helpers.php';
    cekLogin();
    include 'lib/library.php';
    $sql = 'SELECT * FROM siswa INNER JOIN kelas ON (siswa.id_kelas = kelas.id_kelas)';
    //searching
    $search = @$_GET['search'];
    if (!empty($search)) $sql .= " WHERE nis LIKE '%$search%' OR nama LIKE '%$search%' OR  nama_jurusan LIKE '%$search%' OR nama_kelas LIKE '%$search%' OR alamat LIKE '%$search%' OR nama_ibu LIKE '%$search%' ";

    //ordering
    $order_field = @$_GET['sort']; //Mengambil field yang akan di order
    $order_mode = @$_GET['order']; //Mengambil mode nya, Ascending atau Descending

    if(!empty($order_field) && !empty($order_mode)) $sql .= " ORDER BY $order_field $order_mode ";
    $listsiswa = $mysqli -> query($sql);
    $alert = flash('alert');

    include 'views/v_index.php';
?>