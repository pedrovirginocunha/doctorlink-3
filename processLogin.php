<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeUser = $_POST["nomeUser"];
    $senhaUsuario = $_POST["senha"]; // A senha inserida pelo usuário

    // Conecte-se ao banco de dados
    $servidor = "localhost";
    $usuario = "id21419228_doctorlink";
    $senhaBD = "Aa123456?";
    $bancoDeDados = "id21419228_doctorlink";

    $conexao = new mysqli($servidor, $usuario, $senhaBD, $bancoDeDados);

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Consulta SQL para verificar as credenciais do usuário
    $sql = "SELECT senha FROM usuario WHERE nomeUser = '$nomeUser'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();
        $senhaArmazenada = $row["senha"]; // Obtém a senha armazenada no banco de dados

        // Verificar se a senha inserida corresponde à senha armazenada (sem hash)
        if ($senhaUsuario === $senhaArmazenada) {
            // A senha está correta
            // Verificar se é o administrador
            if ($nomeUser === 'admin' && $senhaUsuario === 'admin') {
                // Administrador
                session_start(); // Inicie a sessão
                $_SESSION['nomeUser'] = $nomeUser; // Armazene o nome do usuário na sessão
                header('Location: admin.php'); // Redirecionamento para a página do administrador
                exit; // Importante para parar a execução após o redirecionamento
            } else {
                // Usuário normal
                session_start(); // Inicie a sessão
                $_SESSION['nomeUser'] = $nomeUser; // Armazene o nome do usuário na sessão
                header('Location: logado.html'); // Redirecionamento para a página do usuário normal
                exit; // Importante para parar a execução após o redirecionamento
            }
        } else {
            $mensagemErro = "Credenciais de login inválidas.";
        }
    } else {
        $mensagemErro = "Credenciais de login inválidas.";
    }

    $conexao->close();
} else {
    $mensagemErro = "Método de requisição inválido.";
}

// Redirecionamento com base na mensagem de erro
if (isset($mensagemErro)) {
    header("Location: login.html?erro=" . urlencode($mensagemErro));
    exit;
}
?>