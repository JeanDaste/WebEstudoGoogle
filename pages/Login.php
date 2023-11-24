<?PHP


if (isset($_POST['email'])) {
    include("config.php");
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code  = "SELECT * FROM cadastro WHERE email = '$email' LIMIT 1";
    $sql_exec = $conn->query($sql_code) or die($conn->error);

    $usuario = $sql_exec->fetch_assoc();
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['email'] = $email;
        print "<script>const confirma = confirm('Logado com sucesso!')
            if(confirma){
                location.href='../index.php'
            }else {
                location.href='../index.php'
            }</script>";
    } else {
        print "<script>const confirma = confirm('Email ou senha incorreta!')
            if(confirma){
                location.href='formLogin.php'
            }else {
                location.href='formLogin.php'
            }</script>";
    }
}
