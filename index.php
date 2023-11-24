<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>

<body>
    <header>
        <?php
        session_start();

        ini_set('display_errors', 0);
        if ($_SESSION['email']) {
            print '<p style="margin-right: auto;">Você está logado com o Email: ' . $_SESSION['email'] . '</p>';
            print '<button type="button" id="locds"><a href="pages/Logout.php" target="_self">Sair</a></button>';
            print '<button type="button" id="locds" onclick="if(confirm(\'Tem certeza que quer deletar a conta? Após confirmar não tem como voltar!\')){
                location.href=\'pages/DeleteUser.php\'
            }else {
                location.href=\'index.php\'
            }">Excluir conta</button>';
        } else {
            print '<button type="button" id="locds"><a href="pages/formLogin.php" target="_self">Login</a></button>';
            print '<button type="button" id="locds"><a href="pages/formCadastro.php" target="_self">Cadastre-se</a></button>';
        }
        ?>
    </header>
    <main id="indexM">
        <img src="img/google_pesquisa.png" alt="imagem google" id="gimg">
        <form action="pages/SaveSearch.php" method="POST">
            <input type="text" list="browsers" id="pesquisa" name="pesquisa">
            <datalist id="browsers">
                <?php 
                    include('pages/ReturnSearch.php');
                ?>
            </datalist>
            <div id="achar">
                <button type="submit">Pesquisa Google</button>
                <button type="button">Estou com sorte</button>
            </div>
        </form>
    </main>
    <footer id="indexF">
        <p id="p1">&copy; Todos os direitos reservados a Jean Michel, Esse site foi feito apenas com o intuito de estudos.</p>
        <p id="p2"><button id="sobre"><a href="pages/about.php" target="_self">Sobre</a></button></p>
    </footer>
</body>

</html>