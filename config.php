<?php

    define('HOST', 'localhost');
    define('USER','root');
    define('PASS','');
    define('BASE','hotel');

    $conn = new mysqli(HOST, USER, PASS, BASE);
    if ($conn->connect_errno){
        echo "falha ao conectar: (". $conn->connect_errno . ")" . $conn->connect_errno;
    }
    else
        #echo "Conectado ao Banco de Dados";
?>