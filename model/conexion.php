<?php

// // estilo por procedimientos

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db = "bd_login";

// // crear la conexion
// $conn = mysqli_connect($host,$user,$pass,$db);

// // checkear la conexion
// if (!$conn) {
//     echo "Error: No se pudo conectar a MYSQL." . PHP_EOL;
//     echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
//     exit;
// } else {
//     mysqli_set_charset($conn, "utf8");
// }

include 'config.php';
try {
    $dsn = "mysql:host=".SERVIDOR.";dbname=".BD;
    $pdo = new PDO($dsn, USER, PASSWORD);
    echo "<script> alert('conexion establecida')</script>";
} catch (PDOException $e){
    echo $e->getMessage();
}


?>