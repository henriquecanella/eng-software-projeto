<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Avaliação de Novas Competências</title>
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
            <h2 class="text-center mb-4">Avaliação de Novas Competências</h2>

            <ul class="list-group mt-3">
              <li class="list-group-item">
                <form action="processa_avaliacao.php" method="post">
                  <input type="hidden" name="index" value="0">

                  <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                  </div>

                  <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select class="form-select" id="status" name="status" required>
                      <option value="Aprovada">Aprovada</option>
                      <option value="Rejeitada">Rejeitada</option>
                    </select>
                  </div>

                  <button type="submit" class="btn btn-primary">Salvar Avaliação</button>
                </form>
              </li>
            </ul>
            <ul class="list-group mt-3">
              <li class="list-group-item">
                <form action="processa_avaliacao.php" method="post">
                  <input type="hidden" name="index" value="1">

                  <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                  </div>

                  <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição:</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select class="form-select" id="status" name="status" required>
                      <option value="Aprovada">Aprovada</option>
                      <option value="Rejeitada">Rejeitada</option>
                    </select>
                  </div>

                  <button type="submit" class="btn btn-primary">Salvar Avaliação</button>
                </form>
              </li>
            </ul>

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
