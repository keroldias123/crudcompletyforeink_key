<!DOCTYPE html>
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
    <a class="navbar-brand" href="#">Sua Marca</a>
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

<h1>CRUD DE PAIS,CIDADES,CLIENTES USANDO TAMBEM AS CHAVES ESTRANGUEIRAS</h1>

<!-- Inclua os scripts do Bootstrap (jQuery e Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<!-- Inclua o JavaScript do Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
