<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/profile.css" />
    <script src="../js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header>
      <button onclick="goToPage('home')"><</button>
      <strong>Perfil</strong>
      <div></div>
    </header>
    <div class="main">
      <div class="profile__info">
        <img src="../assets/img_profile.png" alt="app_logo" class="app__logo" />
        <strong>Andressa S. M.</strong>
        <p>andresa_sm@email.com</p>
      </div>
      <button class="button__edit">Editar Perfil</button>
      <div class="accordions">
        <details>
          <summary>Dados do Usuário</summary>
          <span>...</span>
        </details>
        <details>
          <summary>Vaso</summary>
          <span>...</span>
        </details>
        <details>
          <summary>Recibos</summary>
          <span>...</span>
        </details>
        <details>
          <summary>Configurações</summary>
          <span>...</span>
        </details>
      </div>
      <button class="button__logout" onclick="goToPage('login')">Sair</button>
    </div>
  </body>
</html>
