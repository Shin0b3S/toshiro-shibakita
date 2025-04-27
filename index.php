<html>
<head>
    <title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

// Configuração de banco de dados
$servername = "54.234.153.24";
$username = "root";
$password = "Senha123";
$database = "meubanco";

// Criar conexão com o banco de dados
$link = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($link->connect_error) {
    die("Conexão falhou: " . $link->connect_error);
}

// Gerar dados aleatórios
$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();

// Preparar e executar a consulta
$query = $link->prepare("INSERT INTO dados (AlunoID, Nome, Sobrenome, Endere

