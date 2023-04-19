<?php
    include 'lib/library.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis = $_POST ['nis'];
        $nama_lengkap = $_POST ['nama_lengkap'];
        $jenis_kelamin = $_POST ['jenis_kelamin'];
        $kelas = $_POST ['kelas'];
        $jurusan = $_POST ['jurusan'];
        $alamat = $_POST ['alamat'];
        $gol_darah = $_POST['gol_darah'];
        $nama_ibu_kandung = $_POST ['nama_ibu_kandung'];
        $sql = "INSERT INTO siswa VALUES ('$nis', '$nama_lengkap', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$gol_darah', '$nama_ibu_kandung')";
        $mysqli->query($sql) or die     ($mysqli->error);
        header('location: index.php');
    }
    include 'views/v_tambah.php';
?>