<?php include '../config/conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">

<h2>Lista de Clientes</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Ações</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM clientes");

while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['nome']}</td>
    <td>{$row['email']}</td>
    <td>{$row['telefone']}</td>
    <td>
        <td class='acoes'>
    <a class='editar' href='editar.php?id={$row['id']}'>Editar</a>
    <a class='excluir' href='../actions/excluir.php?id={$row['id']}'
    onclick=\"return confirm('Tem certeza que deseja excluir?')\">Excluir</a>
</td>
</tr>";
}
?>

</table>

<br>
<a href="cadastro.php">Cadastrar novo</a>
</div>

</body>
</body>
</html>