<?php
require_once "connection.php";

$sql = "SELECT * FROM usuarios";
$result = $mysqli->query($sql);

// Verifica se houve algum erro na consulta
if (!$result) {
    die("Erro ao buscar usuários: " . $mysqli->error);
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    <link rel="stylesheet" href="lista.css">
</head>
<body>
<div class="container">
    <h2>Lista de usuários</h2>
    <button onclick="window.location.href='index.html'">Voltar ao cadastro</button>
    <div id="users-list">
        <?php
        if ($result->num_rows > 0) {
            
            echo "<form action='atualizar_usuarios.php' method='POST'>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Atualizar</th><th>Deletar</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";

                echo "<td><a href='atualizar_usuarios.php?id=" . $row['id'] . "'>Atualizar</a></td>";
            
                echo "<td><a href='deletar_usuarios.php?id=" . $row['id'] . "'>Deletar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<input type='submit' value='Atualizar'>";
            echo "</form>";

            
        } else {
            echo "<p>Nenhum usuário encontrado.</p>";
        }
        ?>
    </div>
</div>


</body>
</html>
