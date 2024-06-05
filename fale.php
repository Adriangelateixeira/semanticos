<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    //Aqui você pode realizar qualquer ação com os dados recebidos, como enviar um e-mail ou armazenar no banco de dados.

    //Por exemplo, vamos apenas mostrar as informações enviadas:
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mensagem:</strong> $mensagem</p>";
}
?>
