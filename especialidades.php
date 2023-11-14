<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!–---------CSS GLOBAL ------------–>
    <link rel="stylesheet" href="css/estilo.css" />

    <!–---------CSS DO MENU RESPONSIVO ------------–>
    <link rel="stylesheet" href="css/menu.css" />

    <!–---------JAVASCRIPT ------------–>
    <script src="js/script.js"></script>

    <!–---------BIBLIOTECA DE ICONES SVG ------------–>
    <script src="https://kit.fontawesome.com/092ff46a3e.js" crossorigin="anonymous"></script>

    <!–---------Código do FAVICON ------------–>
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img//favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>DoctorLink | Conectando Saúde</title>
    
  </head>

<body>


  <!--Logo + Menu de Navegação -->

  <header class="header">
    <a href="index.html"><img src="img/logo.png" class="logo" /></a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"
      ><span class="navicon"></span></label>
    <ul class="menu">
      <li><a href="index.html"><i class="fa fa-home-alt"></i> Home</a></li>
      <li><a href="especialidades.html"><i class="fa fa-stethoscope"></i> Especialidades</a></li>
      <li><a href="planos.html"><i class="fas fa-laptop-medical"></i> Planos</a></li>
      <li><a href="sobre.html"><i class="fas fa-vector-square"></i> Sobre Nós</a></li>
      <li><a href="login.html" class="alogin"><i class="fa fa-user"></i> Login</a></li>
    </ul>
  </header>

  <br><br><br>


  <main>



    <div class= "linha">
      <li class="capa_item">
        <div style="position:relative;">
          <img src="img/CAPA.jpg" alt="Imagem" style="width:100%;">
          <div style="position:absolute;top:30%;left:75%;transform:translate(-50%,-25%);">
            <h5 class="capa_title">Especialidades Médicas</h5>
            <h4 class="capa_text">Diversas especialidades disponíveis para você.</h4>
          </div>
        </div>
      </li>
    </div>  
    <br>
    <br>
    <br>
    <h3 class="capa_title" style="text-align:center ;">Especialidades em Destaque</h4>
    <br>
    <br>
    
<!-- form de busca -->
<div class="caixa">
  <input type="text" id="busca" placeholder="Pesquisar Especialidade Médica" style="text-align: center;">
</div>

    <div class="main">
      <ul class="linha">

<!-- Card para Acupuntura -->
<li class="cards_item" data-especialidade="acupuntura">
  <div class="card">
    <div class="card_image"><img src="img/ACUPUNTURA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Acupunturista</h2>
      <p class="card_text">Especialista terapêutico, especialidade médica reconhecida desde 1995.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#exampleModal1">CONSULTAR</button>
    </div>
  </div>
</li>


<!-- Modal Acupuntura-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_acupuntura.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>



<!-- Card para Cardiologia -->
<li class="cards_item" data-especialidade="cardiologia">
  <div class="card">
    <div class="card_image"><img src="img/CARDIOLOGIA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Cardiologista</h2>
      <p class="card_text">Especialista responsável por cuidar da saúde do coração e do sistema circulatório.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalCardio">CONSULTAR</button>
    </div>
  </div>
</li>

<!-- Modal Cardio-->
<div class="modal fade" id="ModalCardio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_cardiologia.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>


<!-- Card para Dermatologia -->
<li class="cards_item" data-especialidade="dermatologia">
  <div class="card">
    <div class="card_image"><img src="img/DERMATOLOGIA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Dermatologista</h2>
      <p class="card_text">Especialista dedicado exclusivamente ao cuidado da pele.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalDermatologia">CONSULTAR</button>
    </div>
  </div>
</li>


<!-- Modal Dermatologia-->
<div class="modal fade" id="ModalDermatologia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_dermatologia.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>

<!-- Card para Geriatria -->
<li class="cards_item" data-especialidade="geriatria">
  <div class="card">
    <div class="card_image"><img src="img/GERIATRIA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Geriatra</h2>
      <p class="card_text">Especialista em cuidar da saúde dos idosos, estuda doenças do envelhecimento.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalGeriatria">CONSULTAR</button>
    </div>
  </div>
</li>

<!-- Modal Dermatologia-->
<div class="modal fade" id="ModalGeriatria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_geriatria.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>

<!-- Card para Ginecologia -->
<li class="cards_item" data-especialidade="ginecologia">
  <div class="card">
    <div class="card_image"><img src="img/GINECOLOGIA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Ginecologista</h2>
      <p class="card_text">Especialista responsável por atuar no estudo, cuidado e tratamento dos órgãos reprodutivos femininos.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalGinecologia">CONSULTAR</button>
    </div>
  </div>
</li>


<!-- Modal Dermatologia-->
<div class="modal fade" id="ModalGinecologia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_ginecologia.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>



<!-- Card para Homeopatia -->
<li class="cards_item" data-especialidade="homeopatia">
  <div class="card">
    <div class="card_image"><img src="img/HOMEOPATIA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Homeopata</h2>
      <p class="card_text">Especialista terapêutico que trata diversas doenças, desde alergias respiratórias até problemas emocionais.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalHomeopatia">CONSULTAR</button>
    </div>
  </div>
</li>

<!-- Modal Homeopatia-->
<div class="modal fade" id="ModalHomeopatia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_homeopatia.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>


<!-- Card para Neurologia -->
<li class="cards_item" data-especialidade="neurologia">
  <div class="card">
    <div class="card_image"><img src="img/NEUROLOGIA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Neurologista</h2>
      <p class="card_text">Especialista responsável por diagnosticar e tratar doenças que comprometem o sistema nervoso.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalNeurologia">CONSULTAR</button>
    </div>
  </div>
</li>


<!-- Modal Neurologia-->
<div class="modal fade" id="ModalNeurologia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_neurologia.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>

<!-- Card para Nutricionista -->
<li class="cards_item" data-especialidade="nutricionista">
  <div class="card">
    <div class="card_image"><img src="img/NUTRICIONISTA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Nutricionista</h2>
      <p class="card_text">Especialista que atua na prevenção e recuperação da saúde humana através da alimentação.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalNutricao">CONSULTAR</button>
      
    </div>
  </div>
</li>


<!-- Modal Nutricao-->
<div class="modal fade" id="ModalNutricao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_nutricao.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>

<!-- Card para Pediatria -->
<li class="cards_item" data-especialidade="pediatria">
  <div class="card">
    <div class="card_image"><img src="img/PEDIATRIA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Pediatra</h2>
      <p class="card_text">Especialista com foco no atendimento a crianças e adolescentes de 0 até 18 anos.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalPediatria">CONSULTAR</button>
    </div>
  </div>
</li>

<!-- Modal Pediatria-->
<div class="modal fade" id="ModalPediatria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_pediatria.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>


<!-- Card para Pneumologia -->
<li class="cards_item" data-especialidade="pneumologia">
  <div class="card">
    <div class="card_image"><img src="img/PNEUMOLOGISTA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Pneumologista</h2>
      <p class="card_text">Especialista que atua na manutenção da função do sistema respiratório, incluindo pulmões, brônquios e alvéolos.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalPneumologia">CONSULTAR</button>
    </div>
  </div>
</li>

<!-- Modal Pneumologia-->
<div class="modal fade" id="ModalPneumologia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_pneumologia.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>

<!-- Card para Psicologia -->
<li class="cards_item" data-especialidade="psicologia">
  <div class="card">
    <div class="card_image"><img src="img/PSICOLOGIA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Psicólogo</h2>
      <p class="card_text">Especialista responsável por estabelecer um vínculo com o paciente, para ajudar que as pessoas se enxerguem melhor.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalPsicologia">CONSULTAR</button>
    </div>
  </div>
</li>

<!-- Modal Psicologia-->
<div class="modal fade" id="ModalPsicologia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_psicologia.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>


<!-- Card para Urologia -->
<li class="cards_item" data-especialidade="urologia">
  <div class="card">
    <div class="card_image"><img src="img/UROLOGIA.jpg"></div>
    <div class="card_content">
      <h2 class="card_title">Urologista</h2>
      <p class="card_text">Especialista que atua para atender homens e mulheres quando o assunto são doenças do trato urinário.</p>
      <button class="btn card_btn"  data-toggle="modal" data-target="#ModalUrologia">CONSULTAR</button>
    </div>
  </div>
</li>

<!-- Modal Urologia-->
<div class="modal fade" id="ModalUrologia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <div><?php include 'e_urologia.php'; ?></div> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
      </div>
  </div>
</div>



 
  
  <!-- filtro de busca médicos -->
  
      <script>
  const inputBusca = document.getElementById("busca");
  const cards = document.querySelectorAll(".cards_item");

  inputBusca.addEventListener("keyup", (event) => {
    const termoBusca = inputBusca.value.toLowerCase();

    cards.forEach((card) => {
      const especialidade = card.dataset.especialidade.toLowerCase();

      if (especialidade.includes(termoBusca)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
</script>
    
    
      <br>

  </main>
  <!–---------RODAPE ------------–>

  <div class="footer">
    <div class="row main">
      <div class="col site-info">
        <div class="footer-disclaimer">
          <div class="logo">
            <img src="./img/logo.png" alt="" />
          </div>
         <p>A DoctorLink é uma plataforma de telemedicina acessível e segura. </p>
        </div>
        <div class="footer-links" id="footer">
          <ul>
            <li><a href="index.html" alt=""><i class="fa fa-home-alt"></i> Home</a></li>
            <li><a href="especialidades.html" alt=""><i class="fa fa-stethoscope"></i> Especialidades</a></li>
            <li><a href="planos.html" alt=""><i class="fas fa-laptop-medical"></i> Planos</a></li>
            <li><a href="sobre.html" alt=""><i class="fas fa-vector-square"></i> Sobre Nós</a></li>
            
          </ul>
        </div>
      </div>
     

      <div class="col">
        <div class="footer-links">
          <p><strong>Especialidades</strong></p>
          <ul style="margin-left: 40px;">
            <li><a href="especialidades.html"><i class="fa fa-user-doctor"></i> Angiologia</a></li>
            <li><a href="especialidades.html"><i class="fa-brands fa-mendeley"></i> Assitência Pré Natal</a></li>
            <li><a href="especialidades.html"><i class="fa fa-heart"></i> Cardiologia</a></li> 
            <li><a href="especialidades.html"><i class="fa fa-stethoscope"></i> Dermatologia</a></li> 
            <li><a href="especialidades.html"><i class="fa fa-apple-whole"></i> Nutrição</a></li> 
            <li><a href="especialidades.html"><i class="fa fa-brain"></i> Neurologia</a></li> 
            <li><a href="especialidades.html"><i class="fa fa-spa"></i> Psicologia</a></li>
            <li><a href="especialidades.html"><i class="fa fa-baby"></i> Pediatria</a></li>

          </ul>
          
        </div>
      </div>

      <div class="col maps">
        <div class="place">
          <div class="map-container">
            <div class="map"></div>
          </div>
          <div class="address">
            <p><strong>Fale Conosco</strong></p>
            <p>+55 016 3234-5678</p>
            <p>email@doctorlink.com.br</p>
          </div>
        </div>
        <a href="fale-conosco.html"><img src="./img/vector-01.jpg" alt="Fale Conosco"></a>
      </div>

    </div>


    <div class="row">
      <div class="social-icons">
        <ul >
          <li><a href="#" target="_blank" alt=""><i class="fab fa-facebook"></i></a></li>
          <li><a href="#" target="_blank" alt=""><i class="fab fa-twitter"></i></a></li>
          <li><a href="#" target="_blank" alt=""><i class="fab fa-instagram"></i></a></li>
          <li><a href="#" target="_blank" alt=""><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="ending-note">
      <p>Copyright © 2023 DoctorLink. Todos os direitos reservados.</p>
    </div>
  </div>
  <!–-------FIM RODAPE ------------–>

  <!–---------BOTAO WHATSAPP ------------–>
  <a class="wa" href="https://wa.me/5516992009026?text=Olá" target="_blank">
    <i style="margin-top: 16px" class="fa fa-whatsapp"></i>
  </a>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
