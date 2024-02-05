<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Cadastro de Usuário</title>
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

          <h2 class="text-center mb-4">Cadastro de Usuário</h2>

          <form>
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" placeholder="Digite o nome" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Digite o email" required>
            </div>

            <div class="mb-3">
              <label for="username" class="form-label">Usuário</label>
              <input type="text" class="form-control" id="username" placeholder="Digite o nome de usuário" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Senha</label>
              <input type="password" class="form-control" id="password" placeholder="Digite a senha" required>
            </div>

            <div class="mb-3">
              <label for="wpp" class="form-label">WhatsApp</label>
              <input type="text" class="form-control" id="wpp" placeholder="Digite o número de WhatsApp" required>
            </div>

            <div class="mb-3">
              <label for="skype" class="form-label">Skype</label>
              <input type="text" class="form-control" id="skype" placeholder="Digite o Skype" required>
            </div>

            <div class="mb-3">
              <label for="cargo" class="form-label">Cargo</label>
              <select class="form-select" id="cargo" required>
                <option value="analista">Analista</option>
                <option value="gerente">Gerente</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>

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
