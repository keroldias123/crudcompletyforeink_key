<?php
include '../conexao.php';
if(isset($_POST['insertdata'])) {
    // Obter dados do formulário e inserir no banco de dados
    $nome = $_POST['nome'];
    $sigla = $_POST['sigla'];

    $sql = "INSERT INTO pais(sigla, nome) VALUES ('$sigla', '$nome')";
echo $sql; // Adicione esta linha para imprimir a instrução SQL
$result = mysqli_query($conn, $sql);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location:../form_pais.php');
    // Redirecionar para index.php após a inserção
}
?>