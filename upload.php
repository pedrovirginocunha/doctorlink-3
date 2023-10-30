<?php
$targetDir = "uploads/"; // Diretório onde as imagens serão armazenadas
$uploadOk = 1; // Inicializa a variável para verificar se o upload é bem-sucedido

// Função JavaScript para exibir um pop-up de alerta
function showAlert($message) {
    echo "<script>alert('" . $message . "');</script>";
}

// Verificar se o formulário foi submetido
if (isset($_POST["submit"])) {
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Verificar se o arquivo é uma imagem real
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        showAlert("Arquivo é uma imagem - " . $check["mime"] . ".");
        $uploadOk = 1;
    } else {
        showAlert("O arquivo não é uma imagem.");
        $uploadOk = 0;
    }

    // Verifique se o arquivo já existe no diretório
    if (file_exists($targetFile)) {
        showAlert("Desculpe, o arquivo já existe.");
        $uploadOk = 0;
    }

    // Verifique o tamanho do arquivo (você pode ajustar o limite)
    if ($_FILES["fileToUpload"]["size"] > 50000000) {
        showAlert("Desculpe, o arquivo é muito grande.");
        $uploadOk = 0;
    }

    // Permita apenas alguns formatos de arquivo (você pode ajustar os formatos permitidos)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        showAlert("Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.");
        $uploadOk = 0;
    }

    // Verifique se $uploadOk é definido como 0 por um erro
    if ($uploadOk == 0) {
        showAlert("Desculpe, seu arquivo não foi enviado.");
    } else {
        // Tente mover o arquivo para o diretório de upload
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            showAlert("O arquivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " foi enviado com sucesso.");
        } else {
            showAlert("Desculpe, ocorreu um erro no upload do seu arquivo.");
        }
    }
}
?>
