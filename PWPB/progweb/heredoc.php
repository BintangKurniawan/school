<!DOCTYPE html>
<html lang="en">
<head>
    <title>Penggunaan heredoc sintax</title>
</head>
<body>
    <h1>Penggunaan heredoc sintax</h1>
    <?php
        $STRINGKU = <<<AKHIR
        Menggunakan PHP.
        AKHIR;
        echo <<<KET
        String yang dihasilkan menggunakan heredoc sintax <br>
        \$STRINGKU = $STRINGKU
        KET;
    ?>
</body>
</html>