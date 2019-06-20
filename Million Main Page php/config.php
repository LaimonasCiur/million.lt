<?php

    $file = basename(__FILE__);
    if(preg_match("/$file/", $_SERVER['REQUEST_URI'])){        
        header("Location: index.php");
        die();
    }
    
    $servername = "localhost"; // MySQL Serveris
    $username = "ismoko_million"; // MySQL Vartotojas
    $password = "SS6ThRz4"; // MySQL Slaptažodis
    $dbname = "ismoko_million"; // MySQL Duomenų bazės pavadinimas

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_select_db($conn, $dbname);

    
    $firstBookPrice = "299.00€"; // Pirmos knygos/mokymų kaina
    $secondBookPrice = "299.00€"; // Antros knygos/mokymų kaina
    $thirdBookPrice = "299.00€"; // Trečios knygos/mokymų kaina

    $firstBookTitle = "Aš esu finansiškai nepriklausomas"; // Pirmos knygos/mokymų pavadinimas
    $secondBookTitle = "Aš pardavimų vilkas"; // Antros knygos/mokymų pavadinimas
    $thirdBookTitle = "Aš galiu viską"; // Trečios knygos/mokymų pavadinimas
    $fourthBookTitle = "Aš esu stiprus vadovas (-ė) ir lyderis (-ė)"; // Trečios knygos/mokymų pavadinimas
    $fifthBookTitle = "Marketingas, tai ne reklama -sužinok vieną iš strategijų - BRANDSENSE"; // Trečios knygos/mokymų pavadinimas
    $sixthBookTitle = "Pinigų planavimas/skirstymas kasdienybėje"; // Trečios knygos/mokymų pavadinimas

    $firstBookImg = "book1.png";  // Pirmos knygos/mokymų viršelio pavadinimas [src/img/books] folderyje
    $secondBookImg = "book2.png"; // Antros knygos/mokymų viršelio pavadinimas [src/img/books] folderyje
    $thirdBookImg = "book3.png";  // Trečios knygos/mokymų viršelio pavadinimas [src/img/books] folderyje
    $fourthBookImg = "book4.png";  // Trečios knygos/mokymų viršelio pavadinimas [src/img/books] folderyje
    $fifthBookImg = "book5.png";  // Trečios knygos/mokymų viršelio pavadinimas [src/img/books] folderyje
    $sixthBookImg = "book6.png";  // Trečios knygos/mokymų viršelio pavadinimas [src/img/books] folderyje


?>