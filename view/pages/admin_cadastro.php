<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
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
    <header><button onclick="goToPage('admin_login')"><</button></header>
    <div class="main">
      <label for="upload" class="section__info">
        <img src="../assets/register_icon.png" aria-hidden="true" alt="app_logo" class="app__logo" />
        <input placeholder="" type="file" name="foto" id="upload" style="display: none;" />
        <strong>Cadastro</strong>
      </label>
      <form action="http://localhost/backend-pi/controller/admin/cadastro.php" class="form" method="post">
        <input placeholder="Nome" type="text" name="nome" id="" />
        <input placeholder="E-mail" type="text" name="email" id="" />
        <input placeholder="Data de Nascimento" type="datetime-local" name="datanasc" id="" />
        <input placeholder="Usuario" type="text" name="usuario" id="" />
        <input placeholder="Senha" type="text" name="senha" id="" />

        <input type="submit" value="Concluir" id="button">
      </form>
    </div>
    <footer><img src="../assets/footer_background.png" alt="footer_background" /></footer>
  </body>
</html>
