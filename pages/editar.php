<?php
include '../config/conexao.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM clientes WHERE id = $id");
$cliente = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Editar Cliente</h2>

<form action="../actions/atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">

    Nome: <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>"><br><br>
    Email: <input type="email" name="email" value="<?php echo $cliente['email']; ?>"><br><br>
    Telefone: <input type="text" name="telefone" value="<?php echo $cliente['telefone']; ?>"><br><br>

    <button type="submit">Atualizar</button>
</form>

</body>
</html>