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

        $mysqli-> query ("UPDATE siswa SET nis = '$nis', 
                nama_lengkap = '$nama_lengkap',
                jenis_kelamin = '$jenis_kelamin',
                kelas = '$kelas',
                jurusan = '$jurusan',
                alamat = '$alamat',
                gol_darah = '$gol_darah',
                nama_ibu_kandung = '$nama_ibu_kandung'
                WHERE nis='$nis'
                ") or die ($mysqli -> error);
        header('location: index.php');
    }

    $nis = $_GET['nis'];
    if (empty($nis)) header('location: index.php');
    $query = $mysqli->query("SELECT * FROM siswa WHERE nis = '$nis' ");
    $siswa = $query->fetch_array();

if (empty($siswa)) header('location: index.php');
     include 'views/v_tambah.php';
?>