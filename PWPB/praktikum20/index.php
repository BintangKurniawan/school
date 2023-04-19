<?php
    include 'lib/helpers.php';
    cekLogin();
    include 'lib/library.php';
    $sql = 'SELECT * FROM siswa';
    //searching
    $search = @$_GET['search'];
    if (!empty($search)) $sql .= " WHERE nis LIKE '%$search%' OR nama LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR kelas LIKE '%$search%' OR jurusan LIKE '%$search%' OR alamat LIKE '%$search%' OR gol_darah LIKE '%$search%' OR nama_ibu LIKE '%$search%' ";

    //ordering
    $order_field = @$_GET['sort']; //Mengambil field yang akan di order
    $order_mode = @$_GET['order']; //Mengambil mode nya, Ascending atau Descending

    if(!empty($order_field) && !empty($order_mode)) $sql .= " ORDER BY $order_field $order_mode ";
    $listsiswa = $mysqli -> query($sql);
    include 'views/v_index.php';
?>