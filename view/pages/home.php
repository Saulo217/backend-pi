<?php
require_once "../../connection.php";
require_once "../../model/minhas_plantas.php";
require_once "../../model/usuario.php";

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco;");

$usuario = new Usuario();
$usuario->setUsuario($_COOKIE["usuario"]);
$array = $usuario->readSingleUser($pdo);

$email = $array["email"];

$plantas = new MinhasPlantas();
$array = $plantas->read(
    $pdo,
    " SELECT *
    FROM minhas_plantas
    INNER JOIN
    plantas_ornamentais ON minhas_plantas.nome_cientifico = plantas_ornamentais.nome_cientifico
    WHERE email_usuario = '" . $email . "';"
);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/home.css" />
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
      <img src="../assets/app_icon.png" alt="app_logo" class="app__logo" />
      <strong>SmartEco</strong>
      <img src="../assets/profile_icon.png" alt="app_logo" class="profile__logo" onclick="goToPage('profile')" />
    </header>
    <div class="main">
      <img src="../assets/home_hero.png" alt="" />
      <div class="nav__buttons">
        <button onclick="goToPage('home')">
          <img src="../assets/shop_icon.png" alt="nav_button" />
        </button>
        <button onclick="goToPage('encyclopedia')">
          <img src="../assets/book_icon.png" alt="nav_button" />
        </button>
        <button onclick="goToPage('report')">
          <img src="../assets/report_icon.png" alt="nav_button" />
        </button>
      </div>
      <div class="plants__cards" onclick="goToPage('details')">
        <?php
for ($i = 0; $i < sizeof($array); $i++) {
    setcookie("id_planta", $array[$i]["id_planta"], 0, '/');
    $foto = $array[$i]['foto_planta'];
    $apelido = $array[$i]['apelido'];
    $umidade = number_format((double) $array[$i]['umidade_ideal'], 1);
    $temperatura = number_format((double) $array[$i]['temperatura_ideal'], 1);
    echo "
              <div class='plant__card' onclick='goToPage('details')'>
                <img src='http://locahost/backend-pi/uploads/$foto' alt='' />
                <div class='plant__info'>
                  <strong>$apelido</strong>
                  <div class='plant__info__details'>
                    <div>
                      <img src='../assets/umidade_icon.png' alt='' />
                      <span>" . $umidade . "%</span>
                    </div>
                    <div>
                      <img src='../assets/temp_icon.png' alt='' />
                      <span>" . $temperatura . "°C</span>
                    </div>
                    <span class='link'>ver mais</span>
                  </div>
                </div>
              </div>
            ";
}
?>
      </div>
      <img onclick="goToPage('new_plant')"  src="../assets/add_icon.png" alt="" />
    </div>
    <div></div>
    <footer></footer>
  </body>
</html>
