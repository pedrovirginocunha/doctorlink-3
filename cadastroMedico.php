<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      width: 80%;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #03957C;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      box-sizing: border-box; /* Evita que a borda acrescente largura */
    }

    select.form-control {
      height: 40px;
    }

    .btn {
      background-color: #03957C;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #027363;
    }
  </style>
  <title>Cadastro de Médicos</title>
</head>

<body>
  <div class="container">
    <!--<h2>CADASTRO DE MÉDICOS</h2>-->
    <form method="post" action="medicoFormulario.php">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="especialidade">Especialidade Médica:</label>
        <select class="form-control" id="especialidade" name="especialidade" required>
          <option value="Acupuntura">Acupuntura</option>
          <option value="Cardiologia">Cardiologia</option>
          <option value="Dermatologia">Dermatologia</option>
          <option value="Geriatria">Geriatria</option>
          <option value="Ginecologia">Ginecologia</option>
          <option value="Homeopatia">Homeopatia</option>
          <option value="Ortopedia">Ortopedia</option>
          <option value="Neurologia">Neurologia</option>
          <option value="Nutricionista">Nutrição</option>
          <option value="Pneumologia">Pneumologia</option>
          <option value="Pediatria">Pediatria</option>
          <option value="Psicologia">Psicologia</option>
          <option value="Urologia">Urologia</option>
          <!-- Adicione outras opções de especialidades aqui -->
        </select>
      </div>
      <div class="form-group">
        <label for="contato">Contato (telefone):</label>
        <input type="text" class="form-control" id="contato" name="contato" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" required>
      </div>
      <div class="form-group">
        <label for="cidade">Cidade:</label>
        <input type="text" class="form-control" id="cidade" name="cidade" required>
      </div>
      <div class="form-group">
        <label for="estado">Estado:</label>
        <select class="form-control" id="estado" name="estado" required>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
          <!-- Adicione outros estados brasileiros aqui -->
        </select>
      </div>
      <div class="form-group">
        <label for="pais">País:</label>
        <select class="form-control" id="pais" name="pais" required>
          <option value="Argentina">Argentina</option>
          <option value="Brasil">Brasil</option>
          <option value="Canadá">Canadá</option>
          <option value="Estados Unidos">Estados Unidos</option>
          <option value="França">França</option>
          <option value="Portugal">Portugal</option>
          <option value="Rússia">Rússia</option>
          <!-- Adicione outros países aqui -->
        </select>
      </div>
      <div style="text-align: center;">
        <button type="submit" class="btn btn-success">Cadastrar Médico</button>
      </div>
    </form>
  </div>
</body>
</html>
