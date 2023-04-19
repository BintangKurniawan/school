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
        $foto = $_FILES['foto'];
        if (!empty($foto) AND $foto['error'] == 0) {
            $file_name = $foto['name'];
            $file_tmp = $foto['tmp_name'];
            $file_destination = "assets/images/".$file_name;
            $imageFileType = strtolower(pathinfo($file_destination,PATHINFO_EXTENSION));
        // Check if file already exists
        if (file_exists($file_destination)) {
            flash("alert", "warning", "File sudah ada");
            header('location: index.php');
            return;
        }
        // Check file size
        if ($foto["size"] > 3000000) {
            flash("alert", "warning", "Ukuran file melebihi batas 3mb");
            header('location: index.php');
            return;
        }
        $ext = ['png', 'jpg', 'jpeg', 'gif'];
        if ( !in_array($imageFileType, $ext)) {
            flash("alert", "warning", "File hanya JPG, JPEG, PNG & GIF yang diperbolehkan");
            header('location: index.php');
            return;
        }
        $upload = move_uploaded_file($file_tmp, $file_destination);
        if (!$upload) {
            flash("alert", "error", "upload file gagal");
            header('location: index.php');
            return;
        } 
        }
        $sql = "INSERT INTO siswa VALUES ('$nis', '$nama', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$gol_darah', '$nama_ibu', '$file_destination')";
        $mysqli->query($sql) or die     ($mysqli->error);
        header('location: index.php');
    }
    include 'views/v_tambah.php';
?>