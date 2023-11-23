<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enciclopedia</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="http://localhost/backend-pi/view/css/index.css" />
    <link rel="stylesheet" href="http://localhost/backend-pi/view/css/encyclopedia.css" />
    <script src="https://kit.fontawesome.com/0558079a1f.js" crossorigin="anonymous"></script>
    <script src="http://localhost/backend-pi/view/js/main.js"></script>
    <script src="http://localhost/backend-pi/view/js/especieHandler.js"></script>
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
      <strong>Enciclopedia</strong>
      <img src="../assets/profile_icon.png" alt="app_logo" class="profile__logo" onclick="goToPage('profile')" />
    </header>
    <div class="main">
      <input type="search" class="search" />
    </div>
    <div class="plant__cards__container">
      <!-- Rendered via Javascript on especieHandler.js -->
    </div>
  </body>
</html>
