<?php
    include 'lib/library.php';
    $sql = 'SELECT * FROM siswa';
    $listsiswa = $mysqli->query($sql);
    include 'views/v_index.php';
?>