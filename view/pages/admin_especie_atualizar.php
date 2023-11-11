<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/cadastro.css" />
    <script src="../js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header><button onclick="goToPage('login')"><</button></header>
    <div class="main">
      <label for="upload" class="section__info">
        <img src="../assets/flower_ellipse.png" aria-hidden="true" alt="app_logo" class="app__logo" />
        <input placeholder="" type="file" name="foto" id="upload" style="display: none;" />
        <strong style="font-family: 'Montserrat-Bold'; font-size: 24px; color: #225300;">
            Atualizar
        </strong>
      </label>
      <form action="http://localhost/backend-pi/controller/usuario/cadastro.php" class="form" method="post">
        <input placeholder="Nome Cientifico" type="text" name="nome_cientifico" id="" />
        <input placeholder="Nome Popular" type="text" name="nome_popular" id="" />
        <input placeholder="Data Inicio Florescimento" type="datetime-local" name="data_inicio_florescimento" id="" />
        <input placeholder="Data Fim Florescimento" type="datetime-local" name="data_fim_florescimento" id="" />
        <input placeholder="Idade Minima Florescimento" type="text" name="idade_minima_florescimento" id="" />
        <input placeholder="Quantidade De Agua(Irrigação)" type="text" name="quantidade_agua_irrigacao" id="" />
        <input type="submit" value="Concluir" id="button">
      </form>
    </div>
    <footer><img src="../assets/footer_background.png" alt="footer_background" /></footer>
  </body>
</html>
