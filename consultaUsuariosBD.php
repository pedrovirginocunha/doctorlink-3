<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuários Cadastrados</title>
  <style>
    .user-table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    .user-table th, .user-table td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 10px;
    }

    .user-table th {
      background-color: #00826e;
      color: white;
    }

    .user-table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .user-table tr:nth-child(odd) {
      background-color: #e0f2f1;
    }

    .center-table {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 style="color: rgb(3, 141, 125); text-align: center;">USUÁRIOS CADASTRADOS</h2>
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

    // Consulta SQL para selecionar todos os registros da tabela "usuario"
    $sql = "SELECT * FROM usuario";

    // Executar a consulta
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table class='user-table'>";
        echo "<tr><th>ID</th><th>User</th><th>Nome</th><th>Email</th><th>Data de Nascimento</th><th>Sexo</th><th>CEP</th><th>Endereço</th><th>Medicamento?</th><th>Qual Medicamento?</th><th>Tipo Sanguíneo</th><th>Plano</th><th>Foto</th></tr>";
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha["id"] . "</td>";
            echo "<td>" . $linha["nomeUser"] . "</td>";
            echo "<td>" . $linha["nome"] . "</td>";
            echo "<td>" . $linha["email"] . "</td>";
            echo "<td>" . $linha["dataNascimento"] . "</td>";
            echo "<td>" . $linha["sexo"] . "</td>";
            echo "<td>" . $linha["cep"] . "</td>";
            echo "<td>" . $linha["endereco"] . "</td>";
            echo "<td>" . $linha["medicamento"] . "</td>";
            echo "<td>" . $linha["qualMedicamento"] . "</td>";
            echo "<td>" . $linha["tipoSanguineo"] . "</td>";
            echo "<td>" . $linha["plano"] . "</td>";
            echo "<td>" . $linha["fotoUser"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado.";
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
    ?>
  </div>
</body>
</html>