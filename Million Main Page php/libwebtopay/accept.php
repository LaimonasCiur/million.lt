<?php 

include 'config.php';

$uzsakymas = $_GET['uzsakymas'];
$sql = mysqli_query($conn, "SELECT * FROM payments WHERE token = '$uzsakymas'");

foreach ($sql as $order) {
	$elpastas = $order['el_pastas']; //Išgauname pirkėjo el. paštą
	$telnr = $order['tel_numeris'];
	$suma = $order['suma_eur'];
	$orderid = $order['u_id'];
}

$admin_elpastas = "";

$use = mysqli_query($conn, "UPDATE payments SET busena = 1 WHERE token = '$uzsakymas'");
$use .= mail($elpastas, "Jūsų užsakymas nr. ".$orderid." sėkmingai įvykdytas", "Sveikiname, Jūsų užsakymas sėkmingai patvirtinas");
$use .= mail($admin_elpastas, "Gautas naujas užsakymas", "Sveiki, gavote naują užsakymą: El. paštas - ".$elpastas.", Telefono numeris:".$telnr.", Mokėta suma:".$suma."");


echo $uzsakymas;
if ($use) {
	header("Location: ../index.php?mokejimas=sekmingas");
}

?>
