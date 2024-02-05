<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Sugestão de Competências</title>
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
            <h2 class="text-center mb-4">Sugira Novas Competências</h2>

            <form action="processa_sugestao.php" method="post">
              <div class="mb-3">
                <label for="nomeCompetencia" class="form-label">Nome da Competência:</label>
                <input type="text" class="form-control" id="nomeCompetencia" name="nomeCompetencia" required>
              </div>

              <div class="mb-3">
                <label for="descricaoCompetencia" class="form-label">Descrição da Competência:</label>
                <textarea class="form-control" id="descricaoCompetencia" name="descricaoCompetencia" rows="3" required></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Enviar Sugestão</button>
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
