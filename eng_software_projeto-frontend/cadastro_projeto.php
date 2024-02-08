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
  <title>Cadastro de Projeto</title>
</head>
<body class="bg-light">

<div class="container-fluid">
  <div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <div class="card-body p-4">

          <h2 class="text-center mb-4">Cadastro de Projeto</h2>

          <form action="<? $PHP_SELF; ?>" method="post">
            <div class="mb-3">
              <label for="titulo" class="form-label">Título do Projeto</label>
              <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Digite o título do projeto" required>
            </div>

            <div class="mb-3">
              <label for="descricao" class="form-label">Descrição</label>
              <textarea class="form-control" name="descricao" id="descricao" placeholder="Digite a descrição do projeto" required></textarea>
            </div>

            <div class="mb-3">
              <label for="data_inicio" class="form-label">Data de Início</label>
              <input type="date" class="form-control" name="data_inicio" id="data_inicio" required>
            </div>

            <div class="mb-3">
              <label for="data_fim" class="form-label">Data de Fim</label>
              <input type="date" class="form-control" name="data_fim" id="data_fim" required>
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
<?php
    if(isset($_POST['titulo'])){
      $BACKEND_ADDRESS=getenv("BACKEND_ADDRESS");
      $BACKEND_PORT=getenv("BACKEND_PORT");
      $BACKEND_URL="http://".$BACKEND_ADDRESS.":".$BACKEND_PORT."/projects";

      $titulo     = $_POST['titulo'];
      $descricao    = $_POST['descricao'];
      $data_inicio  = $_POST['data_inicio'];
      $data_fim    = $_POST['data_fim'];

      $data = array(
        'titulo'    => $titulo,
        'descricao'   => $descricao,
        'data_inicio' => $data_inicio,
        'data_fim'   => $data_fim,
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

      if( $data->cadastro_projeto == true ){
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
