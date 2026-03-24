<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_clientes";
$port = 3307; // IMPORTANTE porta correta

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
?>