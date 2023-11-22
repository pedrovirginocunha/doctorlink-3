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
    <!--<h2 style="color: rgb(3, 141, 125); text-align: center;">USUÁRIOS CADASTRADOS</h2>-->
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
    while ($linha = $resultado->fetch_assoc()) {
        echo "<table class='user-table'>";
        echo "<tr class='name-row'><td class='big-font'><B>{$linha["nome"]}</B></td></tr>";
        echo "<tr><td><b>Email:</b> {$linha["email"]}</td></tr>";
        echo "<tr><td><b>Data de Nascimento:</b> {$linha["dataNascimento"]}</td></tr>";
        echo "<tr><td><b>Sexo:</b> {$linha["sexo"]}</td></tr>";
        echo "<tr><td><b>CEP:</b> {$linha["cep"]}</td></tr>";
        echo "<tr><td><b>Endereço:</b> {$linha["endereco"]}</td></tr>";
        echo "<tr><td><b>Medicamento:</b> {$linha["medicamento"]}</td></tr>";
        echo "<tr><td><b>Qual Medicamento:</b> {$linha["qualMedicamento"]}</td></tr>";
        echo "<tr><td><b>Tipo Sanguíneo:</b> {$linha["tipoSanguineo"]}</td></tr>";
        echo "<tr><td><b>Plano:</b> {$linha["plano"]}</td></tr>";
        echo "<tr><td><b>Foto:</b> {$linha["fotoUser"]}</td></tr>";
        echo "</table>";
    }
} else {
    echo "Nenhum usuário cadastrado.";
}
    // Fechar a conexão com o banco de dados
    $conexao->close();
    ?>
  </div>
</body>
</html>