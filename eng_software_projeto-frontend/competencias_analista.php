<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Seleção de Competência</title>
</head>
<body class="bg-light">
<div id="header">
  <?php include 'header.php'; ?>
</div>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body p-5">
            <h2 class="text-center mb-4">Seleção de Competência</h2>

            <form id="formCompetencia">
              <div id="competenciasContainer">
              </div>

              <button type="button" class="btn btn-success" onclick="adicionarCompetencia()">Adicionar Competência</button>

              <button type="submit" class="btn btn-primary w-100 mt-3">Atualizar competências</button>
              <button type="button" class="btn btn-secondary w-100 mt-2" onclick="cancelarSelecao()">Cancelar</button>
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
  <script>
    function adicionarCompetencia() {
      var competenciasContainer = document.getElementById("competenciasContainer");

      var novaLinha = document.createElement("div");
      novaLinha.className = "mb-3";

      novaLinha.innerHTML = `
        <div class="row">
          <div class="col-md-6">
            <label for="competencia" class="form-label">Competência</label>
            <select class="form-select" name="competencia[]">
              <option value="competencia1">Competência 1</option>
              <option value="competencia2">Competência 2</option>
              <!-- Adicione mais opções conforme necessário -->
            </select>
          </div>
          <div class="col-md-4">
            <label for="nivelHabilidade" class="form-label">Nível de Habilidade</label>
            <select class="form-select" name="nivelHabilidade[]">
              <option value="basico">Básico</option>
              <option value="intermediario">Intermediário</option>
              <option value="avancado">Avançado</option>
            </select>
          </div>
          <div class="col-md-2">
            <button type="button" class="btn btn-danger" onclick="removerCompetencia(this.parentNode.parentNode)">Remover</button>
          </div>
        </div>
      `;

      competenciasContainer.appendChild(novaLinha);
    }

    function removerCompetencia(competencia) {
      competencia.remove();
    }

  </script>
</body>
</html>
