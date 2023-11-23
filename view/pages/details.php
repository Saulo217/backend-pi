
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalhes</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="http://localhost/backend-pi/view/css/index.css" />
    <link rel="stylesheet" href="http://localhost/backend-pi/view/css/details.css" />
    <script src="http://localhost/backend-pi/view/js/main.js"></script>
    <script src="http://localhost/backend-pi/view/js/detailsHandler.js"></script>
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
        <strong>SmartEco</strong>
        <img src="http://localhost/backend-pi/view/assets/profile_icon.png" alt="app_logo" class="profile__logo" onclick="goToPage('profile')" />
    </header>
    <div class="main">
      <strong class="plant__name"><script> document.querySelector("strong.plant__name").innerHTML += sessionStorage.getItem("apelido"); </script></strong>
    </div>
    <div class="plant__status__cards__container">
      <!-- Rendered via Javascript on detailsHandler.js -->
    </div>
    <section class="flowering__section">
      <h3>Florecimento</h3>
    </section>
    <section class="help__section">
      <h3>Cuidados e Dicas</h3>
      <!-- Rendered via Javascript on detailsHandler.js -->
    </section>
  </body>
</html>
