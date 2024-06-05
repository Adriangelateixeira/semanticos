<?php
//BANCO DE DADOS DA MySqL
$servername = "localhost";
$username   = "root";
$password   = "root";
$database   = "aulaphp";


$mysqli = new mysqli($servername, $username, $password, $database);

if ($mysqli->connect_error){ 
    die("erro na conexão: ". $mysqli->connect_error);
} else { 
    echo "connection sucesso!!";
}
?>
