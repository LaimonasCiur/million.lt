<?php 

include 'config.php';

$uzsakymas = $_GET['uzsakymas'];

$use = mysqli_query($conn, "UPDATE payments SET busena = 2 WHERE token = '$uzsakymas'");

echo $uzsakymas;
if ($use) {
	header("Location: ../index.php?mokejimas=nepavyko");
}

?>
