<?php
require_once "../../controller/planta/detalhes.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalhes</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/details.css" />
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
        <strong>SmartEco</strong>
        <img src="../assets/profile_icon.png" alt="app_logo" class="profile__logo" onclick="goToPage('profile')" />
    </header>
    <div class="main">
      <strong class="plant__name"><?php echo $array["apelido"] ?></strong>
    </div>
    <div class="plant__status__cards__container">
      <div class="plant__status__card" style="background-color: #e3d6b3">
        <div class="plant__status__card__header">
          <div class="plant__status__card__header__icon" style="background-color: #dab659">
            <img src="../assets/icon_temp.png" alt="" />
          </div>
          <span>Temperatura</span>
        </div>
        <strong><?php echo $temperatura ?>°c</strong>
        <div class="plant__status__card__footer">
          <p>Recomendado</p>
          <p>20°c á 30ºc</p>
        </div>
      </div>
      <div class="plant__status__card" style="background-color: #7bc779">
        <div class="plant__status__card__header">
          <div class="plant__status__card__header__icon" style="background-color: #56aa53">
            <img src="../assets/drop_icon.png" style="width: 25px" alt="" />
          </div>
          <span>Umidade</span>
        </div>
        <strong><?php echo $umidade ?>°c</strong>
        <div class="plant__status__card__footer">
          <p>Recomendado</p>
          <p>20°c á 30ºc</p>
        </div>
      </div>
      <div class="plant__status__card" style="background-color: #f88e8e">
        <div class="plant__status__card__header">
          <div class="plant__status__card__header__icon" style="background-color: #db4242">
            <img src="../assets/water_level_icon.png" style="width: 28px" alt="" />
          </div>
          <span>Nível de água</span>
        </div>
        <strong><?php echo $nivel_agua ?>%</strong>
        <div class="plant__status__card__footer">
          <p>Recomendado</p>
          <p>20°c á 30ºc</p>
        </div>
      </div>
      <div class="plant__status__card" style="background-color: #7bc779">
        <div class="plant__status__card__header">
          <div class="plant__status__card__header__icon" style="background-color: #56aa53">
            <img src="../assets/light_icon.png" style="width: 35px" alt="" />
          </div>
          <span>Iluminação</span>
        </div>
        <strong><?php echo $iluminacao ?></strong>
        <div class="plant__status__card__footer">
          <p>Recomendado</p>
          <p>20°c á 30ºc</p>
        </div>
      </div>
    </div>
    <section class="flowering__section">
      <h3>Florecimento</h3>
    </section>
    <section class="help__section">
      <h3>Cuidados e Dicas</h3>
      <?php
for ($i = 0; $i < sizeof($array_dicas); $i++) {
    echo "
            <div class='help__balloon'>
              <section>" . $array_dicas[$i]["corpo"] . "</section>
            </div>
          ";
}
?>
    </section>
  </body>
</html>
