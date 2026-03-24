<?php
include '../config/conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "UPDATE clientes 
        SET nome='$nome', email='$email', telefone='$telefone'
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../pages/listar.php");
} else {
    echo "Erro: " . $conn->error;
}
?>