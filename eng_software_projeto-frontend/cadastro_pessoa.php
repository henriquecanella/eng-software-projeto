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
  <title>Cadastro de Usuário</title>
</head>
<body class="bg-light">

<div class="container-fluid">
  <div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <div class="card-body p-4">

          <h2 class="text-center mb-4">Cadastro de Usuário</h2>

          <form action="<? $PHP_SELF; ?>" method="POST">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Digite o email" required>
            </div>

            <div class="mb-3">
              <label for="username" class="form-label">Usuário</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Digite o nome de usuário" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Senha</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Digite a senha" required>
            </div>

            <div class="mb-3">
              <label for="wpp" class="form-label">WhatsApp</label>
              <input type="text" class="form-control" name="wpp" id="wpp" placeholder="Digite o número de WhatsApp" required>
            </div>

            <div class="mb-3">
              <label for="skype" class="form-label">Skype</label>
              <input type="text" class="form-control" name="skype" id="skype" placeholder="Digite o Skype" required>
            </div>

            <div class="mb-3">
              <label for="cargo" class="form-label">Cargo</label>
              <select class="form-select" name="cargo" id="cargo" required>
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
<?php
    if(isset($_POST['nome'])){
      $BACKEND_ADDRESS=getenv("BACKEND_ADDRESS");
      $BACKEND_PORT=getenv("BACKEND_PORT");
      $BACKEND_URL="http://".$BACKEND_ADDRESS.":".$BACKEND_PORT."/cadastro_pessoa";

      $nome     = $_POST['nome'];
      $email    = $_POST['email'];
      $usuario  = $_POST['username'];
      $senha    = $_POST['password'];
      $wpp      = $_POST['wpp'];
      $skype    = $_POST['skype'];
      if ($_POST['cargo'] == "gerente"){
        $cargo = 1;
      }else if ($_POST['cargo'] == "analista"){
        $cargo = 2;
      }

      $data = array(
        'nome'    => $nome,
        'email'   => $email,
        'usuario' => $usuario,
        'senha'   => $senha,
        'wpp'     => $wpp,
        'skype'   => $skype,
        'cargo'   => $cargo
      );

      $corpo = json_encode($data);
      // echo $corpo;
      $opts = array('http' =>
          array(
              'method'  => 'POST',
              'header'  => "Content-Type: application/json",
              'content' => $corpo,
              'timeout' => 60
          )
          );
      $context = stream_context_create($opts);
      $file = file_get_contents($BACKEND_URL, false, $context);
      $data = json_decode($file);

      if( $data->cadastro_pessoa == true ){
        echo '<script language="javascript" type="text/javascript">
          window.location.href="operacao_realizada_com_sucesso.php"
          </script>';
      } else{
        echo '<script language="javascript" type="text/javascript">
        window.location.href="operacao_falhou.php"
        </script>';
      }

  }
?>
