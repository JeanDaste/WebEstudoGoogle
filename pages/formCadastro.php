<?php
include('Cadastro.php') 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body id="blogin">
    <div>
        <form id="nlogin" method="post">
            <div>
                <img src="../img/img_login.png" alt="img_login" id="img_login">
                <p id="parLogin">Cadastre-se</p>
                <br>
                <p>Crie sua conta do google</p>
            </div>
            <div class="input-container">
                <input type="email" id="email" required name="email">
                <label for="email" class="label" id="labelemail">Crie um email</label>
                <div class="underline"></div> 
            </div>
            <div class="input-password">
                <input type="password" id="password" required name="senha">
                <label for="password" id="labelpassword" class="label">Senha</label>
                <div class="underline"></div> 
            </div>
            <button type='submit' id="btnCadastrar" name="btnCadastrar">Cadastre-se</button>
            <div>
                <a href="formLogin.php" id="aLogin">Já tem uma conta? Logue-se</a>  
            </div>
        </form>
        <footer id="flogin">
            <p>Português (Brasil)</p>
            <p>&copy; Esse site foi criado baseado no Google, apenas para estudos</p>
        </footer>
    </div>
</body>
</html>