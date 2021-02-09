<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,700,700italic">
  <link rel="stylesheet" href="style.css">
  <title>Absoluta | Saúde - Trabalhe Conosco</title>
</head>
<body>
  <div class="container">
    <header>
      <img src="./assets/logo.png" alt="logo" class="logo">
      <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">A Instituição</a></li>
        <li><a href="#">Operadoras</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Financiamento</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Cotação Online</a></li>
      </ul>
    </header>

    <div class="firstPart">
      <form method="POST" id="myform" enctype="multipart/form-data">

        <div class="inputAndText">
          <label for="nome">Nome</label>
          <input type="text" placeholder="Digite um texto" id="nome" name="nome" required>
        </div>
        
        <div class="inputAndText">
          <label for="email">Email</label>
          <input type="email" placeholder="Digite um email" id="email" name="email" required>
        </div>

        <div class="inputAndText">
          <label for="tel">Tel</label>
          <input type="tel" placeholder="Digite o seu melhor numero" id="tel" name="tel" required>
        </div>

        <div class="inputAndText">
          <label for="opções">Opções</label>
          <select id="opções" name="opções" required>
            <option value="">Em Branco</option>
            <option value="Comercial">Comercial</option>
            <option value="Administrativo">Administrativo</option>
          </select>
        </div>

        <div class="inputAndText">
          <label for="fileupload"><i class="fas fa-file-upload"></i></label>
          <div id="filehere"></div>
          <input type="file" name="fileupload" id="fileupload" style="display: none;">
        </div>

        <button type="submit">Submeter</button>
      </form>

      <div id="video">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/6hBLHkmBKDg" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>


    <div class="secondpart">
      <div id="secondpart-1">
        <img src="./assets/logo.png" alt="logo" class="logo">
      </div>

      <div id="secondpart-2">
        <h3>Faça uma ligação</h3>
        <h4>(11) 2501-9444</h4>
        <h4>(11) 97557-8062</h4>

        <h3>Ou Envie um E-mail</h3>
        <a href="#">contato@absolutasaude.com.br</a>
      </div>


      <div id="secondpart-3">
        <a href="https://absolutasaude.com.br/instituicao.php">A instituição</a>
        <a href="https://absolutasaude.com.br/servicos.php">Operadores</a>
        <a href="https://absolutasaude.com.br/operadoras.php">Serviços</a>
        <a href="https://absolutasaude.com.br/contato.php">Contato</a>
        <a href="https://absolutasaude.com.br/blog">Blog</a>
        <a href="https://absolutasaude.com.br/cotacao.php">Cotação Online</a>
      </div>

      <div id="secondpart-4">
        <h3>Receba Todas as Novidades</h3>
        <span>Seu melhor e-mail</span>
        <form id="FormNewsletter">
          <input type="text">
          <button>Enviar</button>
        </form>
      </div>
    </div>

    <footer>
      <div class="column one">
        <a id="back_to_top" class="button button_js" href="#"><i class="icon-up-open-big"></i></a>
        <div class="copyright">
          © 2019 Absoluta | Saúde | Design By <a target="_blank" rel="nofollow" href="#x">Taggarela.</a>
        </div>
      </div>
    </footer>
  </div>

  <script src="https://www.gstatic.com/firebasejs/8.2.3/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.3/firebase-storage.js"></script>
  <script type="module" src="./script.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script src="https://kit.fontawesome.com/3116ec392f.js" crossorigin="anonymous"></script>

  <script>

  </script>
</body>

</html>