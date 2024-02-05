<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Perfil do Analista</title>
</head>
<body>
  <div id="header">
    <?php include 'header.php'; ?>
  </div>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body p-5">
            <h2 class="text-center mb-4">Perfil do Analista</h2>

            <div class="mb-3">
              <label for="nome" class="form-label">Nome:</label>
              <p id="nome">Nome do Analista</p>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <p id="email">analista@email.com</p>
            </div>

            <div class="mb-3">
              <label for="wpp" class="form-label">WhatsApp:</label>
              <p id="wpp">+55 1234-5678</p>
            </div>

            <div class="mb-3">
              <label for="skype" class="form-label">Skype:</label>
              <p id="skype">skype.analista</p>
            </div>

            <div class="mb-3">
              <label for="competencias" class="form-label">Competências:</label>
              <ul id="competencias">
                <li>Competência 1 - Nível Básico</li>
                <li>Competência 2 - Nível Intermediário</li>
              </ul>
            </div>

            <div class="mb-3">
              <label for="tarefasParte" class="form-label">Tarefas Participadas:</label>
              <ul id="tarefasParte">
                <li><a href="detalhes_tarefa_subtarefa.php">Tarefa 1</a></li>
                <li><a href="detalhes_tarefa_subtarefa.php">Tarefa 2</a></li>
              </ul>
            </div>

            <div class="mb-3">
              <label for="tarefasConcluidas" class="form-label">Tarefas Concluídas:</label>
              <ul id="tarefasConcluidas">
                <li><a href="detalhes_tarefa_subtarefa.php">Tarefa 3</a></li>
                <li><a href="detalhes_tarefa_subtarefa.php">Tarefa 4</a></li>
              </ul>
            </div>

            <div class="mb-3">
              <label for="subtarefasParte" class="form-label">Subtarefas Participadas:</label>
              <ul id="subtarefasParte">
                <li><a href="detalhes_tarefa_subtarefa.php">Subtarefa 1</a></li>
                <li><a href="detalhes_tarefa_subtarefa.php">Subtarefa 2</a></li>
              </ul>
            </div>

            <div class="mb-3">
              <label for="subtarefasConcluidas" class="form-label">Subtarefas Concluídas:</label>
              <ul id="subtarefasConcluidas">
                <li><a href="detalhes_tarefa_subtarefa.php">Subtarefa 3</a></li>
                <li><a href="detalhes_tarefa_subtarefa.php">Subtarefa 4</a></li>
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
