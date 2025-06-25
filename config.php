<?php

    $dbHost = 'localhost:3309';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName = 'formulario-adm';

    $conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conn->connect_errno)
    {
        echo "Erro!";
    } 
    else
    {
        echo "Conexão efetuada com sucesso!";
    }

?>