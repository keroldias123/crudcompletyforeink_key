
<?php
include 'conexao.php';

if(isset($_POST['bntupdate'])) {
     // Obter dados do formulário e inserir no banco de dados
     $nome = $_POST['nome'];
     $telefone = $_POST['telefone'];
     $endereco = $_POST['endereco'];
     $cod_cidade = $_POST['cod_cidade'];
     $email = $_POST['email'];
 
     $sql = "UPDATE cliente SET nome='$nome', sigla_pais='$telefone' WHERE id=$id";
echo $sql; // Adicione esta linha para imprimir a instrução SQL
$result = mysqli_query($conn, $sql);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location:../form_cidade.php');
    // Redirecionar para index.php após a inserção
}
?>