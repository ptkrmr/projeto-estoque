<?php

//Dados de conexão
$host = "localhost";
$banco = "estoque";
$usuario = "root";
$senha = "";

try{
    //Criando conexão com o banco em PDO
    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8",
    $usuario, $senha);

// conexão efetuada
}catch(PDOException $e){
    die("Erro de conexão: ". $e->getMessage());
}
?>