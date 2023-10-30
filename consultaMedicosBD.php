<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Médicos Cadastrados</title>
  <style>
    .medico-table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    .medico-table th, .medico-table td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 10px;
    }

    .medico-table th {
      background-color: #00826e;
      color: white;
    }

    .medico-table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .medico-table tr:nth-child(odd) {
      background-color: #e0f2f1;
    }

    .center-table {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 style="color: rgb(3, 141, 125); text-align: center;">MÉDICOS CADASTRADOS</h2>
    <!-- Tabela HTML para exibir os dados -->
    <?php
    $servidor = "localhost";
    $usuario = "id21419228_doctorlink";
    $senha = "Aa123456?";
    $bancoDeDados = "id21419228_doctorlink";

    // Conectar ao banco de dados
    $conexao = new mysqli($servidor, $usuario, $senha, $bancoDeDados);

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Consulta SQL para selecionar todos os registros da tabela "medico"
    $sql = "SELECT * FROM medico";

    // Executar a consulta
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table class='medico-table'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Especialidade</th><th>Contato</th><th>Email</th><th>Endereço</th><th>Cidade</th><th>Estado</th><th>País</th></tr>";
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha["id"] . "</td>";
            echo "<td>" . $linha["nome"] . "</td>";
            echo "<td>" . $linha["especialidade"] . "</td>";
            echo "<td>" . $linha["contato"] . "</td>";
            echo "<td>" . $linha["email"] . "</td>";
            echo "<td>" . $linha["endereco"] . "</td>";
            echo "<td>" . $linha["cidade"] . "</td>";
            echo "<td>" . $linha["estado"] . "</td>";
            echo "<td>" . $linha["pais"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum médico cadastrado.";
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
    ?>
  </div>
</body>
</html>