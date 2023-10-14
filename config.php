<?php
$hostname = "localhost";
$bancodedados = "sistemacbf";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_error) {
    error_log("Erro ao conectar ao banco de dados: " . $mysqli->connect_error);
    die("Erro ao conectar ao banco de dados: " . $mysqli->connect_error);
} else {
    echo "Sucesso ao conectar ao banco de dados!";
    // Aqui você pode realizar outras operações no banco de dados
}
?>
