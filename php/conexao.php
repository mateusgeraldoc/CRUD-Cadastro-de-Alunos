<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "BD_escola";

$conexao = new mysqli($servername, $username, $password, $dbname);

if($conexao->connect_error){
    die("Erro de Conexão" . $conexao->connect_error)
}
?>