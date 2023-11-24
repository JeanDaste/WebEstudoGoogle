<?php 
session_start();

include('config.php');

if(isset($_SESSION['email'])){
    $id_query = 'SELECT id FROM cadastro WHERE email = ?';
    $stmt_id = $conn->prepare($id_query);
    $stmt_id->bind_param('s', $_SESSION['email']);
    $stmt_id->execute();
    $stmt_id->bind_result($id);

    $stmt_id->fetch();
    $stmt_id->close();

    if ($id !== null) {
        $search_query = 'SELECT texto_pesquisa FROM pesquisa WHERE id = ?';
        $stmt_search = $conn->prepare($search_query);
        $stmt_search->bind_param('i', $id);
        $stmt_search->execute();
        $stmt_search->bind_result($search);

        while ($stmt_search->fetch()) {      
            print '<option value="'.$search.'">'.$search.'</option>';
        }

        $stmt_search->close();

        
        print '<option value="">Selecione uma opção</option>';
    } else {
        echo 'Usuário não encontrado.';
    }
}
?>