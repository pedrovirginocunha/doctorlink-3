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

// Verificar se o ID foi passado via POST
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Preparar a declaração para deletar o médico
    $query = $conexao->prepare("DELETE FROM medico WHERE id = ?");
    $query->bind_param('i', $id);

    // Executar a declaração
    if ($query->execute()) {
        // A exclusão foi bem-sucedida
        echo "Exclusão bem-sucedida!";
    } else {
        // Houve um erro ao excluir
        echo "Erro ao excluir médico. Tente novamente.";
    }

    // Fechar a declaração
    $query->close();
} else {
    // Se o ID não foi passado, exibir uma mensagem de erro
    echo "Erro: ID não fornecido.";
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>