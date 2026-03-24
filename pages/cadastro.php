<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Cadastrar Cliente</h2>

<form action="../actions/salvar.php" method="POST">
    Nome: <input type="text" name="nome" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Telefone: <input type="text" name="telefone"><br><br>

    <button type="submit">Salvar</button>
</form>

</body>
</html>