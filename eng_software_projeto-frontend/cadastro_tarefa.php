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
  <link rel="stylesheet" href="css/styles.css">
  <title>Cadastro de Tarefa</title>
</head>
<body class="bg-light">
<div id="header">
</div>

<div class="container-fluid">
  <div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body p-5">
          <h2 class="text-center mb-4">Cadastro de Tarefa</h2>

          <form action="processar_tarefa.php" method="post">
             <div class="mb-3">
              <label for="projeto" class="form-label">Projeto</label>
              <select class="form-select" id="projeto" name="projeto" required>
                <option value="projeto1">Projeto 1</option>
                <option value="projeto2">Projeto 2</option>
                <option value="projeto2">Projeto 3</option>
                <option value="projeto2">Projeto 4</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="titulo" class="form-label">Título da Tarefa</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título da tarefa" required>
            </div>

            <div class="mb-3">
              <label for="descricao" class="form-label">Descrição</label>
              <textarea class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da tarefa" required></textarea>
            </div>

            <div class="mb-3">
              <label for="dataInicio" class="form-label">Data de Início</label>
              <input type="date" class="form-control" id="dataInicio" name="dataInicio" required>
            </div>

            <div class="mb-3">
              <label for="dataFim" class="form-label">Data de Fim</label>
              <input type="date" class="form-control" id="dataFim" name="dataFim" required>
            </div>

            <div class="mb-3">
              <label for="prioridade" class="form-label">Prioridade</label>
              <select class="form-select" id="prioridade" name="prioridade" required>
                <option value="baixa">Baixa</option>
                <option value="média">Média</option>
                <option value="alta">Alta</option>
              </select>
            </div>

            <div id="competenciasContainer">
              <h4 class="mb-4">Competências Necessárias</h4>
              <div id="competenciasDiv">
              </div>
              <div class="row mb-4">
                <div class="col-md-3">
                  <label for="competencia" class="form-label">Competência</label>
                  <select class="form-select" id="competencia" name="competencia[]">
                    <option value="competencia1">Competência 1</option>
                    <option value="competencia2">Competência 2</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="descricaoCompetencia" class="form-label">Descrição</label>
                  <textarea class="form-control" id="descricaoCompetencia" name="descricaoCompetencia[]" placeholder="Descrição da Competência" readonly></textarea>
                </div>
                <div class="col-md-4">
                  <label for="nivelHabilidade" class="form-label">Nível de Habilidade</label>
                  <select class="form-select" id="nivelHabilidade" name="nivelHabilidade[]">
                    <option value="basico">Básico</option>
                    <option value="intermediario">Intermediário</option>
                    <option value="avancado">Avançado</option>
                  </select>
                </div>
                <div class="col-md-2 justify-content-center">
                  <button type="button" class="btn btn-danger " onclick="removerCompetencia(this)">Remover</button>
                </div>
              </div>
              <button type="button" class="btn btn-success" onclick="adicionarCompetencia()">Adicionar Competência</button>
            </div>

            <div class="mb-3 mt-3">
              <label for="analistas" class="form-label">Analistas Competentes</label>

              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="analista1" name="analistas[]" value="analista1">
                    <label class="form-check-label" for="analista1">Analista 1</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="compatibilidadeAnalista1" value="94%" readonly>
                </div>
              </div>

              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="analista2" name="analistas[]" value="analista2">
                    <label class="form-check-label" for="analista2">Analista 2</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="compatibilidadeAnalista2" value="90%" readonly>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Cadastrar Tarefa</button>

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
<script>
  function adicionarCompetencia() {
    var competenciasContainer = document.getElementById("competenciasDiv");

    var novaLinha = document.createElement("div");
    novaLinha.className = "row mb-3";

    novaLinha.innerHTML = `
      <div class="col-md-3">
        <label for="competencia" class="form-label">Competência</label>
        <select class="form-select" id="competencia" name="competencia[]">
          <option value="competencia1">Competência 1</option>
          <option value="competencia2">Competência 2</option>
          <!-- Adicione mais opções conforme necessário -->
        </select>
      </div>
      <div class="col-md-4">
        <label for="descricaoCompetencia" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricaoCompetencia" name="descricaoCompetencia[]" placeholder="Descrição da Competência" readonly></textarea>
      </div>
      <div class="col-md-4">
        <label for="nivelHabilidade" class="form-label">Nível de Habilidade</label>
        <select class="form-select" id="nivelHabilidade" name="nivelHabilidade[]">
          <option value="basico">Básico</option>
          <option value="intermediario">Intermediário</option>
          <option value="avancado">Avançado</option>
        </select>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-danger" onclick="removerCompetencia(this)">Remover</button>
      </div>
    `;

    competenciasContainer.appendChild(novaLinha);
  }

  function removerCompetencia(botao) {
    var linha = botao.parentNode.parentNode;
    linha.remove();
  }
</script>
</body>
</html>
