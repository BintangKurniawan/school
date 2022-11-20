<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Portalfolio-Profil</title>
</head>
<body>
    <nav class="nav">
        <h1>VELI</h1>
       
    </nav>
    <div class="boxbox-1">
        <div class="align">

            <img src="img/imj.jpg" class="imag">
            <h1 class="h1-name">Bintang Kurniawan</h1>
            <div class="navigation">
                
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Certificate</a></li>
                    <li><a href=""> Projects</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="text-desc-1">
        <p id="desk">
            <?php
            $profesi = "Front-End Developer";
                echo "I'm a ". $profesi . ". I School at SMK Negeri 4 Bandung, this is my Portofolio, and let's begin."
            ?>
        </p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#c9412d" fill-opacity="1" d="M0,64L34.3,53.3C68.6,43,137,21,206,16C274.3,11,343,21,411,64C480,107,549,181,617,208C685.7,235,754,213,823,192C891.4,171,960,149,1029,149.3C1097.1,149,1166,171,1234,176C1302.9,181,1371,171,1406,165.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </div>
    <section class="about" id="about">
        <div class="about-title">
            <h2>About Me</h2>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="box1">
            <div class="desc1">
                <div>
                    <p>
                        <?php
                        $city = "Bandung";
                        $school = "SMK Negeri 4 ";
                        echo "I'm from ". $city . ". I born in " . $city . " on 11th November 2005. I'm currently study at " . $school . $city . ", 11th Grade."
                        ?>
                    </p>
                </div>
            </div>
            <div class="desc-1-img"></div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
            <div class="desc2">
                <p>
                    <?php
                        echo $profesi . " is the job I want to get in Future. Now I'm trying to mastered it. Currently I have some Website projects and I hosting it at Github and Netlify. You can check at projects session. "
                    ?>
                </p>
        </div>
    </section>
        
</body>
</html>