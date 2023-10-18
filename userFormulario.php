<!------------------------ PHP SQL ---------------------------->

<?php
    $servidor = "localhost";
    $usuario = "id21419228_doctorlink";
    $senha = "Aa123456?";
    $bancoDeDados = "id21419228_doctorlink";

    // <!-------------- CONECTAR AO BD --------------->
    $conexao = new mysqli($servidor, $usuario, $senha, $bancoDeDados);

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }
    // <!-------------- PROCESSAR FORMULARIO --------------->
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $dataNascimento = $_POST['dataNascimento'];
        $sexo = $_POST['sexo'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $medicamento = $_POST['medicamento'];
        $qualMedicamento = $_POST['qualMedicamento'];
        // <!-- $formFile = $_POST['formFile']; -->
        $tipoSanguineo = $_POST['tipoSanguineo'];
        $plano = $_POST['plano'];

    // <!-------------- INSERIR DADOS NO BD --------------->
        $sql = "INSERT INTO usuario (nome, email, dataNascimento, sexo, cep, endereco, medicamento, qualMedicamento, tipoSanguineo, plano) 
        VALUES ('$nome', '$email', '$dataNascimento', '$sexo', '$cep', '$endereco', '$medicamento', '$qualMedicamento', '$tipoSanguineo', '$plano')";

        if ($conexao->query($sql) === true) {
            echo "Dados inseridos com sucesso.";
        } else {
            echo "Erro ao inserir dados: " . $conexao->error;
        }
    }

    // <!-------------- FECHAR CONEXÃO COM BD -------------->
$conexao->close();
?>