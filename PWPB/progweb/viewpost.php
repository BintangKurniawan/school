<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="newview.css">
    <title>

        <?php
            $judul = $_POST['judul'];
            echo $judul;
        ?>
    </title>
</head>
<body>
    <div class="card">
        <div class="judul">
            <h1>
                <?php
                    echo $judul;
                ?>
            </h1>
        </div>
        <div class="detail">
            <h3>
                <?php
                    $penulis = $_POST['name'];
                    $tgl = $_POST['tgl'];
    
                    echo $penulis." | ". $tgl;
                ?>
            </h3>
        </div>
        <div class="isi">
            <p>
                <?php
                    $isi = $_POST['isi'];
                    echo $isi;
    
                ?>
            </p>
        </div>
    </div>
</body>
</html>