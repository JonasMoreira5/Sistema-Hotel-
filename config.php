<?php

// Definindo constantes para conexão com o banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'hotel');

// Tentando estabelecer uma conexão com o banco de dados
$conn = new mysqli(HOST, USER, PASS, BASE);

// Verificando se houve algum erro na conexão
if ($conn->connect_errno) {
    echo "Falha ao conectar: (" . $conn->connect_errno . ") " . $conn->connect_error;
} else {
    // Caso queira exibir uma mensagem quando a conexão for bem-sucedida, descomente a linha abaixo
    // echo "Conectado ao Banco de Dados";
}
?>


