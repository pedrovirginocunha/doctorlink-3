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

// Função para exibir um pop-up de alerta
function showAlert($message) {
    echo "<script>alert('" . $message . "');</script>";
}

// Diretório onde as imagens serão armazenadas
$targetDir = "uploads/";

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeUser = $_POST['nomeUser'];
    $senha = $_POST['senha'];
    $senhaSegura = password_hash($senha, PASSWORD_BCRYPT);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataNascimento = $_POST['dataNascimento'];
    $sexo = $_POST['sexo'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $medicamento = $_POST['medicamento'];
    $qualMedicamento = $_POST['qualMedicamento'];
    $tipoSanguineo = $_POST['tipoSanguineo'];
    $plano = $_POST['plano'];

    // Consulta para verificar se o nome de usuário ou email já existem
    $checkQuery = "SELECT * FROM usuario WHERE nomeUser = '$nomeUser' OR email = '$email'";
    $checkResult = $conexao->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        showAlert("Nome de usuário ou email já existem. Por favor, escolha outro nome de usuário ou email.");
        echo "<script>window.location.href = '/cadastroPaciente.html';</script>"; // Redirecionamento
        exit; // Importante para parar a execução após o redirecionamento
    } else {
        // Se não houver resultados na verificação, proceda com a inserção no banco de dados
        if (isset($_FILES["fileToUpload"])) {
            $file = $_FILES["fileToUpload"];
            $targetFile = $targetDir . basename($file["name"]);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $uploadOk = 1; // Inicializa a variável para verificar se o upload é bem-sucedido

            // Verificar se o arquivo é uma imagem real
            $check = getimagesize($file["tmp_name"]);
            if ($check === false) {
                showAlert("O arquivo não é uma imagem.");
                $uploadOk = 0;
            }

            // Verifique o tamanho do arquivo (você pode ajustar o limite)
            if ($file["size"] > 5000000) {
                showAlert("Desculpe, o arquivo é muito grande.");
                $uploadOk = 0;
            }

            // Permita apenas alguns formatos de arquivo (você pode ajustar os formatos permitidos)
            if (
                $imageFileType != "jpg" && $imageFileType != "png" &&
                $imageFileType != "jpeg" && $imageFileType != "gif"
            ) {
                showAlert("Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.");
                $uploadOk = 0;
            }

            if ($uploadOk == 1) {
                $newFileName = $nomeUser . "_foto." . $imageFileType;
                $targetFile = $targetDir . $newFileName;

                if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                    // Arquivo enviado com sucesso, agora insira o nome do arquivo no banco de dados
                    $sql = "INSERT INTO usuario (nomeUser, senha, senhaSegura, nome, email, dataNascimento, sexo, cep, endereco, medicamento, qualMedicamento, tipoSanguineo, plano, fotoUser) 
                            VALUES ('$nomeUser', '$senha', '$senhaSegura', '$nome', '$email', '$dataNascimento', '$sexo', '$cep', '$endereco', '$medicamento', '$qualMedicamento', '$tipoSanguineo', '$plano', '$newFileName')";

                    if ($conexao->query($sql) === true) {
                        echo "<script>window.location.href = '/cadastroPaciente.html';</script>"; // Redirecionamento
                        exit; // Importante para parar a execução após o redirecionamento
                    } else {
                        showAlert("Erro ao inserir dados: " . $conexao->error);
                    }
                } else {
                    showAlert("Desculpe, ocorreu um erro no upload do arquivo.");
                }
            }
        } else {
            showAlert("Por favor, faça o upload de uma imagem.");
        }
    }
}

// <!-------------- FECHAR CONEXÃO COM BD -------------->
$conexao->close();
?>