<?php
$serverName = "LAPTOP-03SGE49J";
$connectionOptions = array(
    "Database" => "ReviewJuego",
    "Authentication" => "Windows" // Utilizar la autenticación de Windows
);

// Establecer la conexión
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    // Si hay un error en la conexión, mostrar un mensaje de error
    die(print_r(sqlsrv_errors(), true));
}
?>

