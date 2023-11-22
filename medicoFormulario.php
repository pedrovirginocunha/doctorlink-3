<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "id21419228_doctorlink";
    $senhaBD = "Aa123456?";
    $bancoDeDados = "id21419228_doctorlink";

    $conn = new mysqli($servidor, $usuario, $senhaBD, $bancoDeDados);

    // Verifica se a conexão foi bem-sucedida
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Recebe os dados do formulário
    $nome = $_POST["nome"];
    $especialidade = $_POST["especialidade"];
    $contato = $_POST["contato"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $pais = $_POST["pais"];

    // Prepara a instrução SQL para inserir os dados na tabela
    $sql = "INSERT INTO medico (nome, especialidade, contato, email, endereco, cidade, estado, pais) 
            VALUES ('$nome', '$especialidade', '$contato', '$email', '$endereco', '$cidade', '$estado', '$pais')";

    // Executa a instrução SQL
    if ($conn->query($sql) === TRUE) {
        // Mensagem de alerta em JavaScript
        echo "<script>alert('Médico cadastrado com sucesso!');</script>";
        // Redireciona para a página de admin.php após o alerta
        echo "<script>window.location = 'admin.php';</script>";
        exit;
    } else {
        // Mensagem de alerta em JavaScript em caso de erro
        echo "<script>alert('Erro ao cadastrar o médico: " . $conn->error . "');</script>";
        echo "<script>window.location = 'admin.php';</script>";
        exit;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    echo "O formulário não foi submetido corretamente.";
}
?>

