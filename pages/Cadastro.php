<?php

if (isset($_POST['btnCadastrar'])) {
    include('config.php');
    $email = $_POST['email'];
    $query = "SELECT * FROM cadastro WHERE email = '$email'";
    $result = $conn->query($query);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    
    if ($result->num_rows > 0) {

        print "<script>alert('Email já cadastrado, tente novamente!');</script>";
    } else {
        $query = "INSERT INTO cadastro (email,senha) VALUES ('$email','$senha')";
        

        if ($conn->query($query) === TRUE) {
            print "<script>alert('Cadastrado com sucesso, agora é só logar!')</script>";
            print "<script>location.href='../index.php';</script>";
        } else {
            echo "Erro ao adicionar registro: ";
        }
    }


    
   



    

    
}
