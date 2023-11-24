<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reportar</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="http://localhost/backend-pi/view/css/index.css" />
    <link rel="stylesheet" href="http://localhost/backend-pi/view/css/report.css" />
    <script src="http://localhost/backend-pi/view/js/main.js"></script>
    <script src="https://kit.fontawesome.com/0558079a1f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header>
      <button onclick="goToPage('home')">
        <i class="fa-solid fa-circle-arrow-left"></i>
      </button>
      <strong>Reportar</strong>
      <img
        src="http://localhost/backend-pi/view/assets/profile_icon.png"
        alt="app_logo"
        class="profile__logo"
        onclick="goToPage('profile')"
      />
    </header>
    <h3>
      Caso tenha tido algum problema ao utilizar o aplicativo por favor utilize o formulário abaixo para que possamos
      corrigi-lo para você! :D
    </h3>
    <div class="report__window">
      <img
        class="window__icon"
        src="http://localhost/backend-pi/view/assets/warnig_report_icon.png"
        alt=""
      />
      <h3>Reportar Bug</h3>
      <form
        action="http://localhost/backend-pi/controller/usuario/bugs_user.php"
        method="post"
      >
        <textarea
          placeholder="| por favor, nos conte aqui qual foi o problema para que possamos resolver :)"
          name="bug"
          id=""
          cols="30"
          rows="10"
        ></textarea>
        <div class="buttons__options">
          <button class="send__button">Entrar</button>
          <button class="take__photo__button">
            <img src="../assets/img_icon.png" alt="" />
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
