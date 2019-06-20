<?php
    
session_start();
 
require_once('WebToPay.php');
include('config.php');

//Paimame info iš pateiktos formos:
$uzsakovas = $_POST['name'];
$elpastas = $_POST['email'];
$telnr = $_POST['telnr'];
$kaina = $_POST['price'];
$book = $_SESSION['book'];

if($book != $kaina) {
    header("Location: ../index.php");
    die();
}

switch($kaina) {
    case 1: {
        $kaina = $price1;
        break;
    }
    case 2: {
        $kaina = $price2;
        break;
    }
    case 3: {
        $kaina = $price3;
        break;
    }
    default: {
        header("Location: ../index.php");
        die();
        break;
    }
}

//Apskaičiuojame kainą centais
$suma = $kaina * 100;

//Padarome užsakymo numerį
$u_id = $p_count + 1;
$token = hash('ripemd160', 'Uzsakymas_pateikiamas_uzid_yra_'.$u_id.''); //Užkoduojame tokeną kurį perduosime į duombazę

function get_self_url() {
    $s = substr(strtolower($_SERVER['SERVER_PROTOCOL']), 0,
                strpos($_SERVER['SERVER_PROTOCOL'], '/'));
 
    if (!empty($_SERVER["HTTPS"])) {
        $s .= ($_SERVER["HTTPS"] == "on") ? "s" : "";
    }
 
    $s .= '://'.$_SERVER['HTTP_HOST'];
 
    if (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80') {
        $s .= ':'.$_SERVER['SERVER_PORT'];
    }
 
    $s .= dirname($_SERVER['SCRIPT_NAME']);
 
    return $s;
}
 
try {
    $self_url = get_self_url();
 
    $request = WebToPay::redirectToPayment(array(
        'projectid'     => 136862, //Čia pakeisti į Artūro projekto id
        'sign_password' => '2ff1458018aee51dab78ad788bc6e58b', //Čia pakeisti į Artūro sign slaptažodį
        'orderid'       => $u_id,
        'p_firstname'   => $uzsakovas,
        'p_email'       => $elpastas,
        'amount'        => $suma,
        'currency'      => 'EUR',
        'paytext'       => 'Mokėjimas už paslaugas www.million.lt svetainėje. Užsakovas - ('.$elpastas.')',
        'country'       => 'LT',
        'accepturl'     => $self_url.'/accept.php?uzsakymas='.$token.'',
        'cancelurl'     => $self_url.'/cancel.php',
        'callbackurl'   => $self_url.'/callback.php',
        'test'          => 1,
    ));
       
$request .= mysqli_query($conn, "INSERT INTO payments (pirkejo_vardas, u_id, el_pastas, tel_numeris, suma_eur, busena, token) VALUES ('$uzsakovas', '$u_id', '$elpastas', '$telnr', '$kaina', '0',
 '$token')");


} catch (WebToPayException $e) {
    // handle exception
} 