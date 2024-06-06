<?php
require_once "connection.php";


$sql ="SELECT * FROM usuarios";
$result = $mysqli->query($sql);

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" href="list.css">

   
</head>
<body>
<div class="container">
 <h2>Lista de usuarios </h2>
 <button onclick="window.location.href='index.html'">Voltar ao cadastro </button>
 <div id="users-list">
   <?php

   if($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th>Nome</th><th>Email</th><Açoes</th><tr>";
    while ($row = $result-> fetch_assoc ()) {
    echo "<tr>";
    echo "<td>". $row['id'] .  "</td";
    echo "<td>". $row['nome'] .  "</td";
    echo "<td>". $row['email'] .  "</td";
    echo "<tr>";
    echo "<button onclick=\"window.location.href='atualizar.php'?id=" . $row['id'] . "'\">Atualizar</button>";
    echo "<button onclick=\"window.location.href='Deletar.php'?id=" . $row['id'] . "'\">Deletar</button>";
    echo "</td>";
    echo "</tr>";
    } 
    echo "</table>";
 } else { 
    echo"<p>Nenhum usuario encontrado.</p>";
   }
   ?>
   </div>
   </div>
   </body>
   </html>
   
   

    
    