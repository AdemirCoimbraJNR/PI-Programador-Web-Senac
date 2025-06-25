<?php

include ('config.php');

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

// Correção aqui: usar `backticks`, não aspas simples
$query = "INSERT INTO `formu` (`nome`, `email`, `telefone`, `mensagem`) 
          VALUES ('$nome', '$email', '$telefone', '$mensagem')";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Erro na query: " . mysqli_error($conn)); // ajuda a debugar melhor
}

header("Location: index.html");
?>
