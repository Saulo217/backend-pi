<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dicas</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" type="text/css" href="http://localhost/backend-pi/view/css/menu.css">
    <script src="http://localhost/backend-pi/view/js/main.js"></script>
    <script src="https://kit.fontawesome.com/0558079a1f.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <button onclick="goToPage('admin/menu')">
      <i class="fa-solid fa-circle-arrow-left"></i>
    </button>
    <h1>Espécies</h1>
  </header>
  <div class="wrapper_dicas">
    <div class="container">
      <div class="button">
        <img src="http://localhost/backend-pi/view/assets/admin_especie_button_plant.png">
        <a href="http://localhost/backend-pi/view/pages/admin/especie_cadastro.php">
          Cadastro
        </a>
      </div>
      <div class="button">
        <a href="http://localhost/backend-pi/view/pages/admin/especie_atualizar.php">
          Manipular <br> Espécies
        </a>
        <img src="http://localhost/backend-pi/view/assets/admin_especie_button_hand_plant.png">
      </div>
    </div>
  </div>
  <footer>
    <img src="http://localhost/backend-pi/view/assets/footer_background.png" alt="footer_background" />
  </footer>
</body>
</html>
