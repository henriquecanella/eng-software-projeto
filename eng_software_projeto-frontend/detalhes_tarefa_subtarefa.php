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
  <title>Detalhes da Tarefa</title>
</head>
<body>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body p-5">
            <h2 class="text-center mb-4">Detalhes da Tarefa</h2>

            <div class="mb-3">
              <label for="titulo" class="form-label">Título:</label>
              <p id="titulo" class="lead">Título da Tarefa</p>
            </div>

            <div class="mb-3">
              <label for="descricao" class="form-label">Descrição:</label>
              <p id="descricao">Descrição da Tarefa</p>
            </div>

            <div class="mb-3">
              <label for="dataInicio" class="form-label">Data de Início:</label>
              <p id="dataInicio">2024-02-01</p>
            </div>

            <div class="mb-3">
              <label for="dataFim" class="form-label">Data de Fim:</label>
              <p id="dataFim">2024-02-15</p>
            </div>

            <div class="mb-3">
              <label for="status" class="form-label">Status:</label>
              <p id="status" class="text-success">Em Andamento</p>
            </div>

            <div class="mb-3">
              <label for="prioridade" class="form-label">Prioridade:</label>
              <p id="prioridade" class="text-danger">Alta</p>
            </div>

            <div class="mb-3">
              <label for="competencias" class="form-label">Competências:</label>
              <ul id="competencias">
                <li>Competência 1 - Nível Básico</li>
                <li>Competência 2 - Nível Avançado</li>
              </ul>
            </div>

            <div class="mb-3">
              <label for="analistas" class="form-label">Analistas Envolvidos:</label>
              <ul id="analistas">
                <li>Nome do Analista 1 - email1@exemplo.com</li>
                <li>Nome do Analista 2 - email2@exemplo.com</li>
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
