<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicas</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" type="text/css" href="http://localhost/backend-pi/view/css/admin.css">
    <style>
        @font-face {
            font-family: "Montserrat-Bold";
            src: url("http://localhost/backend-pi/view/assets/fonts/Montserrat/Montserrat-Bold.ttf") format("truetype");
        }
    </style>
</head>
<body>
<body class="container">
  <header>
    <button onclick="goToPage('admin_app')">
      <i class="fa-solid fa-circle-arrow-left"></i>
    </button>
  </header>
  <div class="main">
    <img src="http://localhost/backend-pi/view/assets/enviados.png" aria-hidden="true" alt="app_logo" class="app__logo"/>
    <strong style="color: #225300; font-family: 'Montserrat-Bold';font-size: 25px; margin-bottom:28rem;margin-top:1rem;">
      Enviados
    </strong>
    <img
      src="http://localhost/backend-pi/view/assets/naolidos.png"
      aria-hidden="true"
      alt="app_logo"
      class="app__naolido"
    />
    <div class="enviados_card">
      <p class="ti1">Marcelo</p>
      <p class="ti2">Boa noite, meu app está um pouco travado.</p>
    </div>
    <div class="enviados_card">
      <p class="ti1">Luana</p>
      <p class="ti2">Meu app não está cadastrando novas plantas.</p>
    </div>
    <div class="enviados_card">
      <p class="ti1">João</p>
      <p class="ti2">Meu app não está abrindo a enciclopédia.</p>
    </div>
    <footer>
      <img src="http://localhost/backend-pi/view/assets/footer_background.png" alt="footer_background" />
    </footer>
</body>
</html>
