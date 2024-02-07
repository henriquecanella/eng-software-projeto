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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Tarefas do Analista</title>
</head>
<body class="bg-light">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center mt-3">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body p-5">
            <h2 class="text-center mb-4">Minhas Tarefas e Subtarefas</h2>

            <table class="table">
              <thead>
                <tr>
                  <th>Projeto</th>
                  <th>Título</th>
                  <th>Descrição</th>
                  <th>Fim</th>
                  <th>Prioridade</th>
                  <th>Status</th>
                  <th>Feedback</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="detalhes_projeto.php">Projeto 1</a></td>
                  <td><a href="detalhes_tarefa_subtarefa.php">Tarefa 1</a></td>
                  <td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#descricaoProjetoModal">Descrição da Tarefa</a>
                  </td>
                  <td>2024-02-15</td>
                  <td>Alta</td>
                  <td>Em Andamento</td>
                  <td></td>
                </tr>
                <tr>
                  <td><a href="detalhes_projeto.php">Projeto 1</a></td>
                  <td><a href="detalhes_tarefa_subtarefa.php">Subtarefa 3</a></td>
                  <td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#descricaoProjetoModal">Descrição da Subtarefa</a>
                  </td>
                  <td>2024-02-15</td>
                  <td>Alta</td>
                  <td>Em Atraso</td>
                  <td></td>
                </tr>
                <tr>
                  <td><a href="detalhes_projeto.php">Projeto 2</a></td>
                  <td><a href="detalhes_tarefa_subtarefa.php">Tarefa 2</a></td>
                  <td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#descricaoProjetoModal">Descrição da Tarefa</a>
                  </td>
                  <td>2024-02-20</td>
                  <td>Média</td>
                  <td>Finalizada</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedbackModal">Adicionar Feedback</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="feedbackModalLabel">Adicionar Feedback</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="feedbackTextarea" class="form-label">Feedback:</label>
              <textarea class="form-control" id="feedbackTextarea" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Salvar Feedback</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="descricaoProjetoModal" tabindex="-1" aria-labelledby="descricaoProjetoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="descricaoProjetoModalLabel">Descrição do Projeto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Detalhes do Projeto 1...</p>
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
