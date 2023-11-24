<?php
#DEFININDO O BANCO DE DADOS PARA CONEXÃO
$server = 'localhost';
$user = 'root';
$password = '';
$banco = 'logon';

#CONEXÃO DO BANCO DE DADOS
$conn = new mysqli($server, $user, $password, $banco);

if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados: " .$conn->connect_error);
} 
?>