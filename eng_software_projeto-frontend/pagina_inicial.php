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
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>Visualização de Tarefas</title>

  <style>
    #chart-container {
      margin-top: 3em;
    }
  </style>
</head>
<body>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body p-5">
            <h2 class="text-center mb-4">Visualização de Tarefas</h2>

            <div class="mb-3">
              <label for="statusSelect" class="form-label">Selecionar Status:</label>
              <select id="statusSelect" class="form-select" onchange="filterByStatus(this.value)">
                <option value="">Todos</option>
                <option value="Andamento">Em Andamento</option>
                <option value="Concluída">Concluído</option>
                <option value="Atraso">Em Atraso</option>
              </select>
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th>Projeto</th>
                  <th>Tarefa</th>
                  <th>Subtarefa</th>
                  <th>Detalhes</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Nome do Projeto 1</td>
                  <td>Nome da Tarefa 1</td>
                  <td>Nome da Subtarefa 1</td>
                  <td><a href="detalhes_tarefa_subtarefa.php">Detalhes</a></td>
                </tr>
                <tr>
                  <td>Nome do Projeto 2</td>
                  <td>Nome da Tarefa 2</td>
                  <td></td> <!-- Sem Subtarefa -->

                  <td><a href="detalhes_tarefa_subtarefa.php">Detalhes</a></td>
                </tr>
              </tbody>
            </table>
            <div id="chart-container">
              <canvas id="chLine"></canvas>
            </div>
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
    var colors = ['#007bff','#28a745','#dc3545'];


    var chLine = document.getElementById("chLine");

    var chartData = {
    labels: ["Agosto", "Setembro", "Outubro", "Novembro", "Dezembro", "Janeiro"],
    datasets: [{
        label: 'Em andamento',
        data: [10, 20, 15, 30, 25, 28],
        backgroundColor: 'transparent',
        borderColor: colors[0],
        borderWidth: 4,
        pointBackgroundColor: colors[0]
    },

    {
        label: 'Concluído',
        data: [7, 5, 6, 8, 4, 4],
        backgroundColor: 'transparent',
        borderColor: colors[1],
        borderWidth: 4,
        pointBackgroundColor: colors[1]
    },
    {
        label: 'Em atraso',
        data: [2, 4, 3, 1, 1, 5],
        backgroundColor: 'transparent',
        borderColor: colors[2],
        borderWidth: 4,
        pointBackgroundColor: colors[2]
    },
    ]
    };
    if (chLine) {
    new Chart(chLine, {
    type: 'line',
    data: chartData,
    options: {
        scales: {
        xAxes: [{
            ticks: {
            beginAtZero: false
            }
        }],
        yAxes: [{
            scaleLabel: {
            display: true,
            labelString: 'Projetos'
            }
        }]
        },
        legend: {
        display: true,
        labels: {
            fontColor: 'rgb(255, 99, 132)'
        }
        },
        responsive: true
    }
    });
    }

  </script>
</body>
</html>
