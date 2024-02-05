<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Cadastro de Projeto</title>
</head>
<body class="bg-light">
<div id="header">
  <?php include 'header.php'; ?>
</div>

<div class="container-fluid">
  <div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <div class="card-body p-4">

          <h2 class="text-center mb-4">Cadastro de Projeto</h2>

          <form action="cadastro_tarefa.php" method="post">
            <div class="mb-3">
              <label for="titulo" class="form-label">Título do Projeto</label>
              <input type="text" class="form-control" id="titulo" placeholder="Digite o título do projeto" required>
            </div>

            <div class="mb-3">
              <label for="descricao" class="form-label">Descrição</label>
              <textarea class="form-control" id="descricao" placeholder="Digite a descrição do projeto" required></textarea>
            </div>

            <div class="mb-3">
              <label for="dataInicio" class="form-label">Data de Início</label>
              <input type="date" class="form-control" id="dataInicio" required>
            </div>

            <div class="mb-3">
              <label for="dataFim" class="form-label">Data de Fim</label>
              <input type="date" class="form-control" id="dataFim" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Criar Projeto</button>

            <a href="#" class="btn btn-secondary w-100 mt-2">Cancelar</a>
          </form>
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
