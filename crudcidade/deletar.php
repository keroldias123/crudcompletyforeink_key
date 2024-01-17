<?php
// Incluir a conexão com o banco de dados
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Implementar a lógica para deletar o registro do banco de dados
    $sql = "DELETE FROM cidade WHERE id = $id";

    if ($conn->query($sql) === true) {
        // Redirecionar para index.php após a exclusão
        header('Location:../form_cidade.php');
        exit();
    } else {
        echo "Erro ao deletar registro: " . $conn->error;
    }
} else {
    echo "ID não fornecido para exclusão.";
}

$conn->close();
?>
