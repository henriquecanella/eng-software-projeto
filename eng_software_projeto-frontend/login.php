<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Login</title>
</head>
<body class="bg-light">

<div class="container-fluid">
  <div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <div class="card-body p-4">
          <div class="text-center mb-4">
            <img src="imagens/logo2.png" alt="Logo" class="img-fluid">
          </div>

          <form>
            <div class="mb-3">
              <label for="username" class="form-label">Usuário</label>
              <input type="text" class="form-control" id="username" placeholder="Digite seu username" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Senha</label>
              <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
            </div>

            <div class="mb-3">
              <a href="esqueci_minha_senha.html" class="text-decoration-none">Esqueceu sua senha?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
