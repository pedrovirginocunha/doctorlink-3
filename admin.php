<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
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
    
    .big-font {
      font-size: 20px;
    }


  </style>
</head>

<body>
  <div class="container">
    <h1 style="color: rgb(3, 141, 125); text-align: center;">MÉDICOS CADASTRADOS</h1>
    <hr>

    <!-- botões -->
    <div style="text-align: center; margin-top: 5px;">
      <button type="button" class="btn btn-outline-primary" onclick="abrirModalCadastro()">CADASTRAR NOVO MÉDICO</button>
      <button type="button" class="btn btn-outline-primary" onclick="abrirModalUsuarios()">VISUALIZAR USUÁRIOS</button>
      <button class="btn btn-outline-success" onclick="atualizarPagina()">ATUALIZAR PÁGINA</button>
    </div>
    <!-- fim botões -->


<!-- Modal de cadastro -->
<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCadastroLabel">CADASTRAR NOVO MÉDICO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
       <div><?php include 'cadastroMedico.php'; ?></div> <!-- Aqui vc chama a sua página -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
            </div>
        </div>
    </div>
</div>
<!-- FIM Modal Cadastro Médicos -->

<!-- Modal de USUÁRIOS -->
<div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-labelledby="modalUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable"role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUsuarioLabel">USUÁRIOS CADASTRADOS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
       <div><?php include 'consultaUsuariosBD.php'; ?></div> <!-- Aqui vc chama a sua página -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
            </div>
        </div>
    </div>
</div>
<!-- FIM Modal Cadastro USUÁRIOS -->


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
            while ($linha = $resultado->fetch_assoc()) {
                echo "<table class='medico-table'>";
                echo "<tr class='name-row'><td class='big-font'><B>{$linha["nome"]}</B></td></tr>";
                echo "<tr><td><b>Especialidade:</b> {$linha["especialidade"]}</td></tr>";
                echo "<tr><td><b>Email:</b> {$linha["email"]}</td></tr>";
                echo "<tr><td><b>Contato:</b> {$linha["contato"]}</td></tr>";
                echo "<tr><td><b>Endereço:</b> {$linha["endereco"]}, {$linha["cidade"]}, {$linha["estado"]}, {$linha["pais"]}</td></tr>";
                echo "<tr><td class='button-container'>
                        <button class='btn btn-primary' data-toggle='modal' data-target='#ModalEditarMedico' onclick='editarMedico(" . $linha["id"] . ")'>EDITAR</button>
                        <button class='btn btn-danger' onclick='deletarMedico(" . $linha["id"] . ")'>DELETAR</button>
                      </td></tr>";
                echo "</table>";
            }
        } else {
            echo "Nenhum médico cadastrado.";
        }

      // Fechar a conexão com o banco de dados
      $conexao->close();
    ?>
  </div>

  <script>
  

// BOTÃO VISUALIZAR USUÁRIOS
    function visualizarUsuarios() {
    window.location.href = "consultaUsuariosBD.php";
    }  
    
// Função para abrir o modal de cadastro
    function abrirModalCadastro() {
        $('#modalCadastro').modal('show');
        // Carregar o conteúdo da página cadastroMedico.php no modal
        $('#modalCadastro .modal-body').load('cadastroMedico.html');
    }
    
// Função para abrir o modal de visualizar usuários
    function abrirModalUsuarios() {
        $('#modalUsuario').modal('show');
        // Carregar o conteúdo da página cadastroMedico.php no modal
        $('#modalUsuario .modal-body').load('consultaUsuariosBD.html');
    }
    
// BOTÃO ATUALIZAR
    function atualizarPagina() {
        location.reload();
     }
    
    
// BOTÃO EDITAR MÉDICO  
    function editarMedico(id) {
        window.location.href = "editarMedico.php?id=" + id;
      }

// BOTÃO DELETAR MÉDICO 
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

</body>
</html>

