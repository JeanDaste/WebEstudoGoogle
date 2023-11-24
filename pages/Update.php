<?php
include('config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'];
    $nova_senha = $_POST['senha'];

    
    $verifica_email_query = 'SELECT id FROM cadastro WHERE email = ?';
    $stmt_verifica_email = $conn->prepare($verifica_email_query);
    $stmt_verifica_email->bind_param('s', $email);
    $stmt_verifica_email->execute();
    $stmt_verifica_email->store_result();

    
    if ($stmt_verifica_email->num_rows > 0) {
        
        $update_query = 'UPDATE cadastro SET senha = ? WHERE email = ?';
        $stmt_update = $conn->prepare($update_query);
        $stmt_update->bind_param('ss', password_hash($nova_senha, PASSWORD_DEFAULT), $email);
        $stmt_update->execute();

        
        if ($stmt_update->affected_rows > 0) {
            print "<script>const confirma = confirm('Senha alterada com sucesso!')
                if(confirma){
                    location.href='../index.php'
                }else {
                    location.href='../index.php'
                }</script>";
        } else {
            echo 'Erro ao atualizar a senha.';
        }

        
        $stmt_update->close();
    } else {
        print "<script>const confirma = confirm('O email não existe, tente novamente!')
        if(confirma){
            location.href='updateEmail.php'
        }else {
            location.href='updateEmail.php'
        }</script>";
    }

    
    $stmt_verifica_email->close();
}
?>