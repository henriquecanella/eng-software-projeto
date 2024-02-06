<?php
  require 'verificar_login.php';
  include 'header.php';
// pagina protegida, incluir script de verificação de login
  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Detalhes do Projeto</title>
</head>
<body>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body p-5">
            <h2 class="text-center mb-4">Detalhes do Projeto</h2>

            <div class="mb-3">
              <label for="titulo" class="form-label">Título:</label>
              <p id="titulo" class="lead">Título do Projeto</p>
            </div>

            <div class="mb-3">
              <label for="descricao" class="form-label">Descrição:</label>
              <p id="descricao">Descrição do Projeto</p>
            </div>

            <div class="mb-3">
              <label for="dataInicio" class="form-label">Data de Início:</label>
              <p id="dataInicio">2024-01-01</p>
            </div>

            <div class="mb-3">
              <label for="dataFim" class="form-label">Data de Fim:</label>
              <p id="dataFim">2024-12-31</p>
            </div>

            <div class="mb-3">
              <label for="tarefas" class="form-label">Tarefas Relacionadas:</label>
              <ul id="tarefas">
                <li><a href="detalhes_tarefa.php">Tarefa 1</a></li>
                <li><a href="detalhes_tarefa.php">Tarefa 2</a></li>
              </ul>
            </div>

            <div class="mb-3">
              <label for="subtarefas" class="form-label">Subtarefas das Tarefas:</label>
              <ul id="subtarefas">
                <li>Subtarefa 1 da Tarefa 1</li>
                <li>Subtarefa 2 da Tarefa 1</li>
              </ul>
            </div>

            <div class="mb-3">
              <label for="colaboradores" class="form-label">Colaboradores:</label>
              <ul id="colaboradores">
                <li>Nome do Colaborador 1 - email1@exemplo.com</li>
                <li>Nome do Colaborador 2 - email2@exemplo.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <?php include 'footer.php'; ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
