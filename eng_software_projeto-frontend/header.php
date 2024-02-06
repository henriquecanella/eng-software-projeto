<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid header">
    <a class="navbar-brand" href="pagina_inicial.php">
      <img src="imagens/logo2.png" alt="Logo" class="img-fluid logo" >
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cadastro_pessoa.php">Pessoa</a></li>
            <li><a class="dropdown-item" href="cadastro_projeto.php">Projeto</a></li>
            <li><a class="dropdown-item" href="cadastro_tarefa.php">tarefa</a></li>
            <li><a class="dropdown-item" href="cadastro_subtarefa.php">Subtarefa</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Opção 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Opção 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Opção 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Opção 5</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Opção 6</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php
            echo $_SESSION['username'].' <img src="imagens/user.png" alt="User Icon" class="user-icon"> ';
          ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
