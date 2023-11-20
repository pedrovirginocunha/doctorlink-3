<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <title>ADMIN - Médicos Cadastrados</title>
  <style>
    .medico-table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    .medico-table th, .medico-table td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 10px;
    }

    .medico-table th {
      background-color: #00826e;
      color: white;
    }

    .medico-table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .medico-table tr:nth-child(odd) {
      background-color: #e0f2f1;
    }

    .center-table {
      text-align: center;
    }

    .button-container {
      text-align: left;
    }

    .button-container button {
      margin-right: 5px;
    }
  </style>
</head>

<body>
  <div class="containerr">
        <h1 style="color: rgb(3, 141, 125); text-align: center;">PAINEL ADMIN - MÉDICOS CADASTRADOS</h1>
        <HR>
    <!-- botão atualizar -->
        <div style="text-align: center; margin-top: 5px;">
      <button class="btn btn-outline-success" onclick="atualizarPagina()">ATUALIZAR PÁGINA</button>
      <button class="btn btn-outline-info" onclick="visualizarUsuarios()">VISUALIZAR USUÁRIOS CADASTRADOS</button>
    </div>
    <!-- fim botão atualizar -->
        <HR>
        <h3 style="color: rgb(3, 141, 125); text-align: center;">E = EDITAR | D = DELETAR</h2>
        <HR>

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

    // Consulta SQL para selecionar todos os registros da tabela "medico"
    $sql = "SELECT * FROM medico";

    // Executar a consulta
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table class='medico-table'>";
        echo "<tr><th>Ações</th><th>ID</th><th>Nome</th><th>Especialidade</th><th>Contato</th><th>Email</th><th>Endereço</th><th>Cidade</th><th>Estado</th><th>País</th></tr>";
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
        echo "<td class='button-container'>
                <button class='btn btn-outline-primary' data-toggle='modal' data-target='#ModalEditarMedico' onclick='editarMedico(" . $linha["id"] . ")'>E</button>
                <button class='btn btn-outline-danger' onclick='deletarMedico(" . $linha["id"] . ")'>D</button>
              </td>";

            echo "<td>" . $linha["id"] . "</td>";
            echo "<td>" . $linha["nome"] . "</td>";
            echo "<td>" . $linha["especialidade"] . "</td>";
            echo "<td>" . $linha["contato"] . "</td>";
            echo "<td>" . $linha["email"] . "</td>";
            echo "<td>" . $linha["endereco"] . "</td>";
            echo "<td>" . $linha["cidade"] . "</td>";
            echo "<td>" . $linha["estado"] . "</td>";
            echo "<td>" . $linha["pais"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum médico cadastrado.";
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
    ?>

    <script>
    
    // BOTÃO ATUALIZAR
    function atualizarPagina() {
        location.reload();
      }
      
    // BOTÃO VISUALIZAR USUÁRIOS
    function visualizarUsuarios() {
        window.location.href = "consultaUsuariosBD.php";
    }  
      
    function editarMedico(id) {
        window.location.href = "editarMedico.php?id=" + id;
      }

    function deletarMedico(id) {
  // Pede confirmação antes de deletar
  var confirmacao = confirm("Tem certeza que deseja deletar esse médico?");
  
  if (confirmacao) {
    // Chama a página PHP para deletar o médico no banco de dados
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          // A ação foi concluída com sucesso
          alert("Médico deletado com sucesso!");
          // Recarrega a página para refletir as mudanças
          window.location.reload();
        } else {
          // Algum erro ocorreu durante a requisição
          alert("Erro ao deletar médico. Tente novamente.");
        }
      }
    };

    // Configura e envia a requisição POST
    xhr.open("POST", "deletarMedico.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("id=" + id);
  }
}
    </script>
    
    
    

<div class="modal fade" id="ModalEditarMedico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'editarMedico.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
      </div>
      </div>
  </div>
</div>


    
  </div>
</body>
</html>