<?php
   
    $servername = "localhost"; // MySQL Serveris
    $username = "ismoko_million"; // MySQL Vartotojas
    $password = "SS6ThRz4"; // MySQL Slaptažodis
    $dbname = "ismoko_million"; // MySQL Duomenų bazės pavadinimas

    $price1 = "299";
    $price2 = "299";
    $price3 = "299";

    $conn = mysqli_connect($host, $username, $password, $dbname);
    mysqli_select_db($conn, $dbname);

    $sql = mysqli_query($conn, "SELECT * FROM payments");
    $p_count = mysqli_num_rows($sql);

    if (!$conn) {
        echo "<h1>Prisijungimas prie duomenu bazes - nepavyko </h1>";
    }


?>