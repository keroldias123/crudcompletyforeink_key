<?php
include '../conexao.php';

if(isset($_POST['insertdata'])) {
    // Obter dados do formulário e inserir no banco de dados
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cod_cidade = $_POST['cod_cidade'];
    $cod_pais = $_POST['cod_pais'];
    $email = $_POST['email'];

    $sql = "INSERT INTO cliente (nome, telefone, endereco, cod_cidade,cod_pais, email) VALUES ('$nome', '$telefone', '$endereco','$cod_cidade',' $cod_pais', '$email')";
echo $sql; // Adicione esta linha para imprimir a instrução SQL
$result = mysqli_query($conn, $sql);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location:../form_cliente.php');
    // Redirecionar para index.php após a inserção
}
?>