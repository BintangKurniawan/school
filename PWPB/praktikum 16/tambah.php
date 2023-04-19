<?php
    include 'lib/library.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis = $_POST ['nis'];
        $nama = $_POST ['nama'];
        $jenis_kelamin = $_POST ['jenis_kelamin'];
        $kelas = $_POST ['kelas'];
        $jurusan = $_POST ['jurusan'];
        $alamat = $_POST ['alamat'];
        $gol_darah = $_POST['gol_darah'];
        $nama_ibu = $_POST ['nama_ibu'];
        $sql = "INSERT INTO siswa VALUES ('$nis', '$nama', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$gol_darah', '$nama_ibu')";
        $mysqli->query($sql) or die     ($mysqli->error);
        header('location: index.php');
    }
    include 'views/v_tambah.php';
?>