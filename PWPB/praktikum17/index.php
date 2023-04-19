<?php
    include 'lib/helpers.php';
    cekLogin();
    include 'lib/library.php';
    $listsiswa = $mysqli -> query('SELECT * FROM siswa');
    include 'views/v_index.php';
?>