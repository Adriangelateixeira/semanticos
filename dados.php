<?php

require_once "connection.php";




if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['email'])) {

    $id  = $_POST['id'];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
  

    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email'  WHERE id = $id";

    if($mysqli->query($sql) ===TRUE) {
        echo "usuarios ATUALIZADO COM sucesso";
    }; 


} else {
    echo "Erro";
};


$mysqli->close();

 ?>