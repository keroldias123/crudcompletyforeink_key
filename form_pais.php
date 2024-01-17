<?php
include 'conexao.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclua a folha de estilo do Bootstrap (CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Navbar com Bootstrap</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="form_pais.php">Adicionar País</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form_cidade.php">Adicionar Cidade</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form_cliente.php">Adicionar Cliente</a>
            </li>
        </ul>
    </div>
</nav>

<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="crudpais/adicionar.php" method="POST">

                    <div class="modal-body">

                    <div class="form-group">
                        <label for="nome">sigla:</label>
                        <input type="text" name="sigla" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>

                   
                 

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </div>

                    </div>
                  
                </form>

            </div>
        </div>
    </div>


<div class="container mt-5">
           <button class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">Add cliente</button>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>sigla</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Incluir a conexão com o banco de dados
            include 'conexao.php';

            // Consultar os dados dos clientes
            $sql = "SELECT * FROM pais";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['sigla']}</td>
                            <td>{$row['nome']}</td>
                            <td>
                                <button class='btn btn-primary btn-sm' onclick='openEditModal(" . $row['id'] . ")'>Editar</button>
                                <a href='deletar.php?id={$row['id']}' class='btn btn-danger'>Deletar</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum pais encontrado.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>

            

    


<!-- Inclua os scripts do Bootstrap (jQuery e Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<!-- Inclua o JavaScript do Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  

<script>
    function openEditModal(id) {
        // Use AJAX para buscar os dados do cliente do servidor
        $.ajax({
            url: 'dados_cliente.php',
            method: 'GET',
            data: { id: id },
            dataType: 'json', // Especifica o tipo de dado que espera receber
            success: function (dados) {
                console.log(dados); // Verifique os dados recebidos do servidor

                // Preencha o formulário com os dados recebidos
                $('#editClientId').val(parseInt(dados.id));
                $('#editClientName').val(dados.nome);
                $('#editClientTelefone').val(dados.telefone);
                $('#editClientEndereco').val(dados.endereco);
                $('#editClientCity').val(dados.cod_cidade);
                $('#editClientEmail').val(dados.email);

                // Abra o modal de edição
                $('#editarClienteModal').modal('show');
            },
            error: function () {
                alert('Erro ao buscar dados do cliente.');
            }
        });
    }
</script>

</body>
</html>
