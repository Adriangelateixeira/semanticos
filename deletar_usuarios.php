<?php

require_once "connection.php"; 

if(isset($id_para_deletar['id'])) {
    $id  = $id_para_deletar['id'];
    $sql = "SELECT * FROM usuarios WHERE id = $id";

    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    $nome = $row['nome'];
    $email = $row['email'];
    
}

// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$database = "usuarios";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Deletando dados
$id_para_deletar = 1; // Substitua pelo ID ou qualquer outra condição que você deseja para deletar

$sql = "DELETE FROM usuarios WHERE id = $id_para_deletar";

if ($conn->query($sql) === TRUE) {
    echo "Registro deletado com sucesso.";
} else {
    echo "Erro ao deletar registro: " . $conn->error;
}

// Fechando a conexão
$conn->close();
?>
