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
        
        $delete_references_query = 'DELETE FROM pesquisa WHERE id = ?';
        $stmt_delete_references = $conn->prepare($delete_references_query);
        $stmt_delete_references->bind_param('i', $id);
        $stmt_delete_references->execute();
        $stmt_delete_references->close();

        
        $delete_user_query = 'DELETE FROM cadastro WHERE id = ?';
        $stmt_delete_user = $conn->prepare($delete_user_query);
        $stmt_delete_user->bind_param('i', $id);
        $stmt_delete_user->execute();

        
        if ($stmt_delete_user->affected_rows > 0) {
            header('Location: Logout.php');
        } else {
            echo 'Erro ao excluir a conta.';
        }

        
        $stmt_delete_user->close();
    } else {
        echo 'Usuário não encontrado.';
    }
} else {
    echo 'Email não está definido na sessão.';
}
?>