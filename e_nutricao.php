<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NUTRIÇÃO</title>

      <!–---------CSS médicos especialidades ------------–>
    <link rel="stylesheet" href="css/medicosEspecialidades.css" />

</head>
<body>
  <div>
    <h2>NUTRICIONISTAS</h2>

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

    // Consulta SQL para selecionar todos os registros da tabela "medico" com especialidade
    $especialidade = "nutricionista";
    $sql = "SELECT * FROM medico WHERE especialidade = ?";

    // Preparar e executar a consulta
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $especialidade);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            echo "<table class='medico-table'>";
            echo "<tr class='name-row'><td class='big-font'>{$linha["nome"]}</td></tr>";
            echo "<tr><td><b>Especialidade:</b> {$linha["especialidade"]}</td></tr>";
            echo "<tr><td><b>Email:</b> {$linha["email"]}</td></tr>";
            echo "<tr><td><b>Contato:</b> {$linha["contato"]}</td></tr>";
            echo "<tr><td><b>Endereço:</b> {$linha["endereco"]}, {$linha["cidade"]}, {$linha["estado"]}, {$linha["pais"]}</td></tr>";
            echo "</table>";
        }
    } else {
        echo "Nenhum médico de Nutrição cadastrado.";
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
    ?>
  </div>
</body>
</html>