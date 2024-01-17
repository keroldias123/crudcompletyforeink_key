<?php
include '../conexao.php';

if(isset($_POST['insertdata'])) {
    // Obter dados do formulário e inserir no banco de dados
    $nome = $_POST['nome'];
    $sigla_pais = $_POST['sigla_pais'];

    $sql = "INSERT INTO cidade (nome, sigla_pais) VALUES ('$nome', '$sigla_pais')";
echo $sql; // Adicione esta linha para imprimir a instrução SQL
$result = mysqli_query($conn, $sql);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location:../form_cidade.php');
    // Redirecionar para index.php após a inserção
}
?>