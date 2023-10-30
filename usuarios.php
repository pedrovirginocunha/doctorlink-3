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
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Data de Nascimento</th><th>Sexo</th><th>CEP</th><th>Endereço</th><th>Medicamento</th><th>Tipo Sanguíneo</th></tr>";
    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $linha["id"] . "</td>";
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
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>
// CRIAÇÃO DA TABLE NO BANCO DE DADOS

// CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomeUser VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    dataNascimento DATE,
    sexo VARCHAR(10),
    cep VARCHAR(10),
    endereco VARCHAR(255),
    medicamento ENUM('sim', 'nao'),
    qualMedicamento VARCHAR(255),
    tipoSanguineo VARCHAR(5)
    plano VARCHAR(50)
);
