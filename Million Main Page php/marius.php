<?php
   include 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- META SETTINGS -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="verify-paysera" content="7c156592a47beb319922438f447d15c6">
        <!-- OTHER SETTINGS -->
        <title>MILLION.LT</title>
        <link rel="icon" type="image/png" href="src/img/icons/favicon.png">
        <!-- INCLUDES -->
        <link rel="stylesheet" href="src/css/main.css">
        <link rel="stylesheet" href="src/css/responsive.css">
        <link rel="stylesheet" href="src/css/reset.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/92fc45dd29bb7c123490fcb63/8b573573a579f37ab031f7049.js");</script>
    </head>
    <style>
        .header {
            background-size: cover;
            height: 100px;
        }
        .footContacts {
            margin-top: 0;
        }
    </style>
    <body>
    <div class="header">
        <div class="width">
            <div class="logo">
                <a href="index.php"><img src="src/img/logo/Group%204.svg" alt="million.lt logo"></a>
            </div>
            <nav>
                <a href="#" onclick="toggleMenu()" id="menu-icon"><i class="fa fa-bars"></i></a>
                <ul>
                    <li><a href="kontaktai.php" class="btn-border">Kontaktai</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="mainContent">
        <aside class="show_Desktop">
            <img src="src/img/teachers/teacher3.png" alt="">
        </aside>
        <div class="personInfo">
            <h1 class="teacherName">
                Marius
                <p>Kizelevičius</p>
            </h1>
            <p class="gray spacing">Verslininkas, investuotojas, holdingo kompanijos savininkas</p>
            <div class="biography">
                <div>
                    <p class="title spacing">Apie Marių</p>
                    <p>investuotojų angelas ir mentorius, BNI Vanagas narys.  Specializuojasi patirtinio mokymosi, įtaigios komunikacijos, nuostatų, strategijos ir nuomonės formavimo investicijų srityje.
                    </p>
                </div>
                <div>
                    <p class="title spacing">Pasiekimai</p>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis doloribus consequatur beatae, atque in alias.</li>
                    <li>Quas nemo est soluta officia in repellat dolore quos. Molestiae dolorem dignissimos ullam harum illo.</li>
                    <li>Sit blanditiis mollitia, non ducimus animi voluptatem sapiente vero sint, eligendi, nam possimus suscipit eos!</li>
                </div>
            </div>
            <div class="incoming">
                <p class="title">Artėjantys renginiai</p>
                <a href="https://webskin.lt/million123123/knyga.php?book=2"><img src="src/img/incoming1.png" alt=""></a>
            </div>
        </div>
    </div>
    <script>
        function toggleMenu() {
        var menuBox = document.querySelector('nav ul');
            if (menuBox.style.display == "block") { // if is menuBox displayed, hide it
                menuBox.style.display = "none";
            } else { // if is menuBox hidden, display it
                menuBox.style.display = "block";
            }
        }
    </script>
    <?php include 'src/content/footer.inc.php'; ?>