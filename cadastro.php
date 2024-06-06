<?php

require_once "connection.php";

$name= $_POST['nome'];

$email = $_POST['email'];

$mensagem = $_POST["mensagem"];



$sql = "INSERT INTO usuarios (nome, email, mensagem) VALUES ('$name', '$email', '$mensagem' )";

if ($mysqli->query($sql) === TRUE) {

echo "Contato adicionado com sucesso";

} else { 
    echo "Erro ao adicionar contato: ".$mysqli->error;

}

$mysqli->close();
?>