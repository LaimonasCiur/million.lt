<?php

    include '../libwebtopay/config.php';

    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($conn, $_POST['name']);
        $phoneNumber = mysqli_real_escape_string($conn, $_POST['telnr']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        
        $sql = "INSERT INTO `freebook` (`username`, `phoneNumber`, `email`) VALUES ('$username', '$phoneNumber', '$email')";
        
        $subject = "Million.lt / Nemokama knyga";
        $txt = 
        "
        <html>
        <head>
        </head>
        <body>
            Sveiki ".$username.",<br><br> jums yra paruošta atsisiųsti mūsų nemokama knyga.<br>
            Spauskite <a href='www.million.lt/src/million-knygute-min.pdf'>ŠIĄ NUORODĄ</a> norėdami atsisiųsti.
        </body>
        </html>
        ";
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: million.lt <info@million.lt>' . "\r\n";
    
        mail($email, $subject, $txt, $headers);
        
        if ($conn->query($sql)) {
            header("Location: ../index.php?success");
            die();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        header("Location: ../index.php");
        die();
    }

?>
