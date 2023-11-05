<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/index.css" />
    <script src="../js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/admin.css">
  </head>
  <body class="container">
    <header>
      <img src="../assets/app_icon.png" alt="app_logo" class="app__logo" />
      <strong>SmartEco</strong>
      <img src="../assets/profile_icon.png" alt="app_logo" class="profile__logo" onclick="goToPage('profile')" />
    </header>
    <div class="main">
        <form class="form" style="height: 50%; flex: none;">
            <input type="button" value="Espécies" id="button">
            <input type="button" value="Dicas" id="button">
        </form>

    </div>
    <footer><img src="../assets/footer_background.png" alt="footer_background" /></footer>
  </body>
</html>
