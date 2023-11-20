<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 800px;
    margin: 20px auto;
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    color: rgb(3, 141, 125);
    text-align: center;
  }

  form {
    display: grid;
    gap: 10px;
  }

  label {
    font-weight: bold;
  }

  input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
  }

  button {
    background-color: #00826e;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
  }

  button:hover {
    background-color: #006d60;
  }
</style>

<?php
    $servidor = "localhost";
    $usuario = "id21419228_doctorlink";
    $senha = "Aa123456?";
    $bancoDeDados = "id21419228_doctorlink";

// Conectar ao banco de dados
$conexao = new mysqli($servidor, $usuario, $senha, $bancoDeDados);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Verificar se o ID foi passado via GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Preparar a declaração para selecionar os dados do médico
    $query = $conexao->prepare("SELECT * FROM medico WHERE id = ?");
    $query->bind_param('i', $id);

    // Executar a declaração
    $query->execute();

    // Obter os resultados
    $resultado = $query->get_result();

    // Verificar se há resultados
    if ($resultado->num_rows > 0) {
        // Obter os dados do médico
        $medico = $resultado->fetch_assoc();
    } else {
        // Se não houver resultados, exibir uma mensagem de erro
        echo "Erro: Médico não encontrado.";
        exit;
    }

    // Fechar a declaração
    $query->close();
} else {
    // Se o ID não foi passado, exibir uma mensagem de erro
    echo "Erro: ID não fornecido.";
    exit;
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade'];
    $contato = $_POST['contato'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];

    // Preparar a declaração para atualizar os dados do médico
    $query = $conexao->prepare("UPDATE medico SET nome=?, especialidade=?, contato=?, email=?, endereco=?, cidade=?, estado=?, pais=? WHERE id=?");
    $query->bind_param('ssssssssi', $nome, $especialidade, $contato, $email, $endereco, $cidade, $estado, $pais, $id);

    // Executar a declaração
    if ($query->execute()) {
        // A atualização foi bem-sucedida
        echo "Atualização bem-sucedida!";
    } else {
        // Houve um erro ao atualizar
        echo "Erro ao atualizar médico. Tente novamente.";
    }

    // Fechar a declaração
    $query->close();
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Médico</title>
  <!-- Adicione seu link para o CSS aqui, se necessário -->
</head>
<body>
  <div class="container">
    <h2 style="color: rgb(3, 141, 125); text-align: center;">EDITAR MÉDICO</h2>
    <!-- Formulário HTML para editar os dados do médico -->
    <form method="post" action="">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" value="<?php echo $medico['nome']; ?>" required>

      <label for="especialidade">Especialidade:</label>
      <input type="text" name="especialidade" value="<?php echo $medico['especialidade']; ?>" required>

      <label for="contato">Contato:</label>
      <input type="text" name="contato" value="<?php echo $medico['contato']; ?>" required>

      <label for="email">Email:</label>
      <input type="email" name="email" value="<?php echo $medico['email']; ?>" required>

      <label for="endereco">Endereço:</label>
      <input type="text" name="endereco" value="<?php echo $medico['endereco']; ?>" required>

      <label for="cidade">Cidade:</label>
      <input type="text" name="cidade" value="<?php echo $medico['cidade']; ?>" required>

      <label for="estado">Estado:</label>
      <input type="text" name="estado" value="<?php echo $medico['estado']; ?>" required>

      <label for="pais">País:</label>
      <input type="text" name="pais" value="<?php echo $medico['pais']; ?>" required>

      <button type="submit">Atualizar</button>
    </form>
  </div>
</body>
</html>