<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Visualização de Analistas</title>
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
            <h2 class="text-center mb-4">Visualização de Analistas</h2>

            <table class="table">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Skype</th>
                  <th>Email</th>
                  <th>Competências</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="perfil_analista.php?id=1">Nome do Analista 1</a></td>
                  <td>skype.analista1</td>
                  <td>analista1@email.com</td>
                  <td>
                    <ul>
                      <li>Competência 1 - Nível Básico</li>
                      <li>Competência 2 - Nível Intermediário</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td><a href="perfil_analista.php?id=2">Nome do Analista 2</a></td>
                  <td>skype.analista2</td>
                  <td>analista2@email.com</td>
                  <td>
                    <ul>
                      <li>Competência 3 - Nível Avançado</li>
                      <li>Competência 4 - Nível Intermediário</li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>

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
