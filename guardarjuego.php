<?php
include 'database.php'; // Incluir el archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $gameId = $_POST["gameId"];
    $gameName = $_POST["gameName"];
    $gameGenre = $_POST["gameGenre"];
    $gamePlatform = $_POST["gamePlatform"];
    $gameDeveloper = $_POST["gameDeveloper"];
    $gameMetascore = $_POST["gameMetascore"];
    $gamePlayers = $_POST["gamePlayers"];

    // Preparar la consulta SQL
    $sql = "INSERT INTO Juegos (Id, Nombre, Genero, Plataforma, Desarrolladora, Puntaje_Metascore, Num_Jugadores) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Ejecutar la consulta preparada
    $params = array($gameId, $gameName, $gameGenre, $gamePlatform, $gameDeveloper, $gameMetascore, $gamePlayers);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        // Si hay un error en la consulta, mostrar un mensaje de error
        die(print_r(sqlsrv_errors(), true));
    } else {
        // Si la consulta se ejecuta con éxito, redirigir a la página principal u otra página de confirmación
        header("Location: index.html");
        exit();
    }
}
?>
