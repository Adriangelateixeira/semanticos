<?php

require_once "connection.php";

$id=$_GET['id'];

// Deletando dados// Substitua pelo ID ou qualquer outra condição que você deseja para deletar

$sql = "DELETE FROM usuarios WHERE id = $id";

if ($mysqli->query($sql) === TRUE) {
    echo "Registro deletado com sucesso.";
} else {
    echo "Erro ao deletar registro: " . $mysqli->error;
}

header("refresh: 1; url = exibir.php");

// Fechando a conexão
$mysqli->close();
?>
