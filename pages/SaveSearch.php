<?php
session_start();
include('config.php');

if (isset($_SESSION['email'])) {

    $id_query = 'SELECT id FROM cadastro WHERE email = ?';
    $stmt_id = $conn->prepare($id_query);
    $stmt_id->bind_param('s', $_SESSION['email']);
    $stmt_id->execute();
    $stmt_id->bind_result($id);

    $stmt_id->fetch();
    $stmt_id->close();

    if ($id !== null) {
        $texto_pesquisa = $_POST['pesquisa'];

        
        $check_query = 'SELECT id FROM pesquisa WHERE texto_pesquisa = ? AND id = ?';
        $stmt_check = $conn->prepare($check_query);
        $stmt_check->bind_param('si', $texto_pesquisa, $id);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows == 0) {
            
            $query_save = 'INSERT INTO pesquisa (texto_pesquisa, id) VALUES (?, ?) ON DUPLICATE KEY UPDATE texto_pesquisa = VALUES(texto_pesquisa)';
            $stmt_save = $conn->prepare($query_save);
            $stmt_save->bind_param('si', $texto_pesquisa, $id);
            $stmt_save->execute();
            $stmt_save->close();
            
            header('Location: ../index.php');
        } else {
            header('Location: ../index.php');
        }

        $stmt_check->close();
    } else {
        echo 'Usuário não encontrado.';
    }

} else {
    header('Location: ../index.php');
}
?>