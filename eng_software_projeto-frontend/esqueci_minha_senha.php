<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css"> 
  <title>Redefinir Senha</title>
</head>
<body class="bg-light">

<div class="container-fluid">
  <div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-4 bg-light-blue"> 
      <div class="card">
        <div class="card-body p-4">

          <div class="text-center mb-4">
            <img src="imagens/logo2.png" alt="Logo" class="img-fluid">
          </div>

          <form>
            <div class="mb-3">
              <p class="text-muted text-center">Digite seu endereço de e-mail e enviaremos um link para redefinir sua senha.</p>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Redefinir a senha</button>
          </form>

 
          <div class="mt-3 text-center">
            <a href="login.html" class="text-decoration-none">Voltar ao Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
