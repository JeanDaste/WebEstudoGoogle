<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudar </title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body id="blogin">
    <div>
        <form id="nlogin" action="Update.php" method='POST'>
            <div>
                <img src="../img/img_login.png" alt="img_login" id="img_login">
                <p id="parLogin">Mude sua senha</p>
                <br>
                <p>Coloque o email que você usou quando criou a conta</p>
            </div>
            <div class="input-container">
                <input type="email" id="email" name="email" required>
                <label for="email" class="label" id="labelemail">E-mail</label>
                <div class="underline"></div>
            </div>
            <div class="input-password">
                <input type="password" id="password" required name="senha">
                <label for="password" id="labelpassword" class="label">Nova senha</label>
                <div class="underline"></div>
            </div>
            <p id="window_priv">Não está no seu computador? Use uma janela de navegação privada para fazer login.</p>
            <div>
                <a href="formCadastro.php" id="aCriar">Criar conta</a>
                <button id="btnLogar">Alterar</button>
            </div>
        </form>
        <footer id="flogin">
            <p>Português (Brasil)</p>
            <p>&copy; Esse site foi criado baseado no Google, apenas para estudos</p>
        </footer>
    </div>
</body>

</html>